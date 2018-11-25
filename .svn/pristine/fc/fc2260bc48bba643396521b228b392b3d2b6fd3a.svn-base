//
//  XDX_AllViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/1.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "XDX_AllViewController.h"
#import "ParthSchoolCollectionViewCell.h"
#import "XDX_DetailViewController.h"
@interface XDX_AllViewController ()<UICollectionViewDelegate,UICollectionViewDataSource,UICollectionViewDelegateFlowLayout>
{
    UICollectionView *collection;
    NSMutableArray *dataArr;
    NSInteger page;
}

@end

@implementation XDX_AllViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = self.Heardname;
    page = 1;
    dataArr = [[NSMutableArray alloc] init];
    [self CreateUI];
    [self createData];
}

- (void)refresh {
    page = 1;
    [dataArr removeAllObjects];
    [self createData];
    
}

- (void)loadMore {
    page++;
    [self createData];
}


- (void)createData{
    
    [self showHUD:nil];
    WEAKSELF
    NSString *biz = [NSString stringWithFormat:@"&cate_id=%@&p=%zd&pageSize=10",self.classID,page];
    [ConnectionRequestMgr GetSessionWithUrl:SchoolList parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
         [weakSelf cancelStatus];
        if ([dict[@"code"] integerValue] == 1) {
            for (int i = 0; i< [dict[@"data"] count]; i++) {
                NSDictionary *dic = dict[@"data"][i];
                [dataArr addObject:dic];
            }
            [collection reloadData];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
         [weakSelf cancelStatus];
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
}

- (void)CreateUI{
    UICollectionViewFlowLayout *layout=[[UICollectionViewFlowLayout alloc]init];
    layout.minimumInteritemSpacing = 16;
    layout.minimumLineSpacing = 5;
    layout.itemSize=CGSizeMake((SCREEN_W -48)/2, 180);  //设置每个单元格的大小
    layout.headerReferenceSize=CGSizeMake(self.view.frame.size.width, 5);
    //设置collectionView头视图的大小
    
    collection = [[UICollectionView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H -64) collectionViewLayout:layout];
    collection.backgroundColor = [UIColor whiteColor];
    collection.delegate=self;
    collection.dataSource=self;
    collection.showsVerticalScrollIndicator = FALSE;
    collection.showsHorizontalScrollIndicator = FALSE;
    [self.view addSubview:collection];
    
    [collection registerNib:[UINib nibWithNibName:@"ParthSchoolCollectionViewCell" bundle:nil] forCellWithReuseIdentifier:@"ParthSchoolCollectionViewCell"];
    [collection registerClass:[UICollectionReusableView class] forSupplementaryViewOfKind:UICollectionElementKindSectionHeader withReuseIdentifier:@"Header"];
    
    collection.mj_header = [FunClubGifHeader headerWithRefreshingTarget:self refreshingAction:@selector(refresh)];
    collection.mj_footer = [MJRefreshAutoFooter footerWithRefreshingTarget:self refreshingAction:@selector(loadMore)];
    
    
}

#pragma mark UICollectionView
-(NSInteger)collectionView:(UICollectionView *)collectionView numberOfItemsInSection:(NSInteger)section
{
    return dataArr.count;
}

//定义展示的Section的个数
-(NSInteger)numberOfSectionsInCollectionView:(UICollectionView *)collectionView
{
    return 1;
}

-(UICollectionViewCell*)collectionView:(UICollectionView *)collectionView cellForItemAtIndexPath:(NSIndexPath *)indexPath
{
    ParthSchoolCollectionViewCell *cell =  [collectionView dequeueReusableCellWithReuseIdentifier:@"ParthSchoolCollectionViewCell" forIndexPath:indexPath];
    [cell.imageV sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.row][@"thumb"]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
    cell.titleL.text = dataArr[indexPath.row][@"name"];
    cell.lookNum.text = [NSString stringWithFormat:@"%zd",(int)dataArr[indexPath.row][@"visit"]];
    return cell;
}

- (UICollectionReusableView *)collectionView:(UICollectionView *)collectionView viewForSupplementaryElementOfKind:(NSString *)kind atIndexPath:(NSIndexPath *)indexPath{
    UICollectionReusableView *headView = [collectionView dequeueReusableSupplementaryViewOfKind:UICollectionElementKindSectionHeader
                                                                            withReuseIdentifier:@"Header"
                                                                                   forIndexPath:indexPath];
    for (UIView *view in headView.subviews) {
        [view removeFromSuperview];
    }
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 20)];
    view.backgroundColor = [UIColor whiteColor];
    [headView addSubview:view];
    return headView;
}

- ( UIEdgeInsets )collectionView:( UICollectionView *)collectionView layout:( UICollectionViewLayout *)collectionViewLayout insetForSectionAtIndex:( NSInteger )section {
    
    return UIEdgeInsetsMake (  0,16  , 0 , 16 );
    
}

- (void)collectionView:(UICollectionView *)collectionView didSelectItemAtIndexPath:(NSIndexPath *)indexPath{
    NSDictionary *dic = @{@"istype":@(1),@"playerID":dataArr[indexPath.row][@"id"],@"titleStr":dataArr[indexPath.row][@"name"]};
    
    [[UIHelper sharedSingleton] pushVC:@"XDX_DetailViewController" vc:self parames:dic];
    
}

- (void)cancelStatus
{
    if ([collection.mj_header isRefreshing]) {
        [collection.mj_header endRefreshing];
    }else if ([collection.mj_footer isRefreshing]) {
        [collection.mj_footer endRefreshing];
    }
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
