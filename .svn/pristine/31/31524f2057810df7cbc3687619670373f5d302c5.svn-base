//
//  XDX_ClassViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/1.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "XDX_ClassViewController.h"
#import "XDX_ClassCollectionViewCell.h"
#import "XDX_ClassLeftTableViewCell.h"
#import "XDX_AllViewController.h"
@interface XDX_ClassViewController ()<UITableViewDelegate,UITableViewDataSource,UICollectionViewDataSource,UICollectionViewDelegate,UICollectionViewDelegateFlowLayout>

@property (nonatomic, strong) UICollectionView *rightCollectionView;
@property (nonatomic ,strong) NSMutableArray *dataArr;
@property (nonatomic ,assign) NSInteger selectedIndex;
@property (nonatomic, strong) UITableView *tableView;
@property (nonatomic, assign) BOOL isRelate;

@end

@implementation XDX_ClassViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    _selectedIndex = 0;
    self.title = @"选课";
    self.dataArr = [[NSMutableArray alloc] init];
    self.view.backgroundColor = [UIColor whiteColor];
    [self createData];
}

- (void)createData{
    
    [self showHUD:nil];
    WEAKSELF
    [ConnectionRequestMgr GetSessionWithUrl:SchoolClass parameter:nil successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            for (int i = 0; i< [dict[@"data"] count]; i++) {
                NSDictionary *dic = dict[@"data"][i];
                [self.dataArr addObject:dic];
            }
            [self createUI];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
}

- (void)createUI{
    [self CollectionView];
    [self TableView];
    
}

//创建tableview左边栏
-(UITableView *)TableView{
    if (_tableView == nil) {
        _tableView = [[UITableView alloc]initWithFrame:CGRectMake(0, 0, 120,self.view.frame.size.height) style:UITableViewStylePlain];
        _tableView.backgroundColor = UIColorFromRGBA(0xF9F5F5, 1);
        _tableView.delegate = self;
        _tableView.dataSource = self;
        _tableView.rowHeight = 44;
        _tableView.bounces = NO;
        _tableView.separatorStyle = NO;
        _tableView.tableFooterView = [[UIView alloc] init];
        _tableView.showsVerticalScrollIndicator = FALSE;
        _tableView.showsHorizontalScrollIndicator = FALSE;
        //        _tableView.scrollEnabled = NO;//不能滑动
        [self.view addSubview:_tableView];
        [_tableView registerNib:[UINib nibWithNibName:@"XDX_ClassLeftTableViewCell" bundle:nil] forCellReuseIdentifier:@"XDX_ClassLeftTableViewCell"];
        
    }
    return _tableView;
}

//创建右边视图
-(UICollectionView *)CollectionView
{
    //创建tableview的列表
    UICollectionViewFlowLayout *flowayout = [[UICollectionViewFlowLayout alloc]init];
    
    //    flowayout.itemSize = CGSizeMake(60, 100);//设置每个item的大小
    //    //设置上下左右的间距
    //    flowayout.sectionInset = UIEdgeInsetsMake(0, 10, 10, 10);
    //    //如果有多个区就可以拉动
    //    [flowayout setScrollDirection:UICollectionViewScrollDirectionVertical];
    //横向最小间距
    flowayout.minimumInteritemSpacing = 16;
    flowayout.minimumLineSpacing = 20;
    _rightCollectionView = [[UICollectionView alloc]initWithFrame:CGRectMake(120, 20, self.view.frame.size.width-120, self.view.frame.size.height-20) collectionViewLayout:flowayout];
    _rightCollectionView.bounces = NO;
    [_rightCollectionView registerNib:[UINib nibWithNibName:@"XDX_ClassCollectionViewCell" bundle:nil] forCellWithReuseIdentifier:@"XDX_ClassCollectionViewCell"];
    [_rightCollectionView setBackgroundColor:[UIColor clearColor]];
    
    
    _rightCollectionView.delegate = self;
    _rightCollectionView.dataSource = self;
    _rightCollectionView.backgroundColor = [UIColor whiteColor];
    [self.view addSubview:_rightCollectionView];
    
    return _rightCollectionView;
}

-(CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath
{
    
    return 44;
}

//-(NSInteger)numberOfSectionsInCollectionView:(UICollectionView *)collectionView{
//    //设置组数，不写该方法默认是一组
//    return _dataArr.count;
//}

// 行数
-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return self.dataArr.count;
}

-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    
    XDX_ClassLeftTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"XDX_ClassLeftTableViewCell"];
    cell.titleL.text = _dataArr[indexPath.row][@"name"];
    if (_selectedIndex == indexPath.row) {
        cell.titleL.textColor = [UIColor redColor];
        cell.line.backgroundColor = [UIColor redColor];
    }else{
        cell.titleL.textColor = UIColorFromRGBA(0x333333, 1);
        cell.line.backgroundColor = [UIColor whiteColor];
    }
    
    return cell;
}

// tableview cell 选中
-(void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
    
    [tableView scrollToRowAtIndexPath:indexPath atScrollPosition:UITableViewScrollPositionTop animated:YES];
    
    [_rightCollectionView scrollRectToVisible:CGRectMake(120, 20, self.view.frame.size.width-120,SCREEN_H) animated:YES];
    
    _selectedIndex = indexPath.row;
    [_tableView reloadData];
    [_rightCollectionView reloadData];
    

}

#pragma mark------CollectionView的代理方法
-(NSInteger)collectionView:(UICollectionView *)collectionView numberOfItemsInSection:(NSInteger)section
{
   return [self.dataArr[_selectedIndex][@"son"] count];

}
-(UICollectionViewCell *)collectionView:(UICollectionView *)collectionView cellForItemAtIndexPath:(NSIndexPath *)indexPath
{
    XDX_ClassCollectionViewCell *cell = [collectionView dequeueReusableCellWithReuseIdentifier:@"XDX_ClassCollectionViewCell" forIndexPath:indexPath];
    cell.titleL.text = self.dataArr[_selectedIndex][@"son"][indexPath.row][@"name"];
    cell.titleL.numberOfLines = 2;
    return cell;
}

//设置上下左右空间
-(UIEdgeInsets)collectionView:(UICollectionView *)collectionView layout:(UICollectionViewLayout *)collectionViewLayout insetForSectionAtIndex:(NSInteger)section
{
    
    return UIEdgeInsetsMake(0, 16, 0, 16);
    
}

//调用代理设置itme大小
-(CGSize)collectionView:(UICollectionView *)collectionView layout:(UICollectionViewLayout *)collectionViewLayout sizeForItemAtIndexPath:(NSIndexPath *)indexPath
{
    return CGSizeMake((SCREEN_W-120 - 48)/2, (SCREEN_W-120 - 48)/2);
}

//collertionview点击事件处理
-(void)collectionView:(UICollectionView *)collectionView didSelectItemAtIndexPath:(NSIndexPath *)indexPath{
    
  
    [[UIHelper sharedSingleton] pushVC:@"XDX_AllViewController" vc:self parames:@{@"classID":self.dataArr[_selectedIndex][@"son"][indexPath.row][@"id"],@"Heardname":self.dataArr[_selectedIndex][@"son"][indexPath.row][@"name"]}];
   
}


- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

/*
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}
*/

@end
