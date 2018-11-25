//
//  StoryRootViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/3.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "StoryRootViewController.h"
#import "StoryRootCollectionViewCell.h"
#import "XDX_DetailViewController.h"
@interface StoryRootViewController ()<UICollectionViewDelegate,UICollectionViewDataSource,UICollectionViewDelegateFlowLayout>
{
    UICollectionView *collection;
    NSMutableArray *dataArr;
    NSInteger page;
    NSString *NewsID;
    NSString *titleStr;
}


@end

@implementation StoryRootViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.view.backgroundColor = COLOR(249, 245, 245);
    dataArr = [[NSMutableArray alloc] init];
    [self CreateUI];
}

-(void)rootLoadData:(NSInteger)index andArr:(NSDictionary *)dic
{
    titleStr = dic[@"name"];
    [dataArr removeAllObjects];
    [self showHUD:nil];
    WEAKSELF
    NSString *biz=[NSString stringWithFormat:@"&cate_id=%@",dic[@"id"]];
    [ConnectionRequestMgr GetSessionWithUrl:HistoryList parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            for (int i = 0; i< [dict[@"data"] count]; i++) {
                [dataArr addObject:dict[@"data"][i]];
            }

            [collection reloadData];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
        
    }];

}

- (void)CreateUI{
    
    UICollectionViewFlowLayout *layout=[[UICollectionViewFlowLayout alloc]init];
    layout.minimumInteritemSpacing = 20;
    layout.minimumLineSpacing = 20;
    layout.itemSize=CGSizeMake((SCREEN_W -92)/2, 150);  //设置每个单元格的大小
    layout.headerReferenceSize=CGSizeMake(self.view.frame.size.width, 16);
    //设置collectionView头视图的大小
    
    collection = [[UICollectionView alloc] initWithFrame:CGRectMake(16, 10, SCREEN_W-32, SCREEN_H -48 -64-174) collectionViewLayout:layout];
    collection.backgroundColor = [UIColor whiteColor];
    collection.delegate=self;
    collection.dataSource=self;
    collection.showsVerticalScrollIndicator = FALSE;
    collection.showsHorizontalScrollIndicator = FALSE;
    [self.view addSubview:collection];
    
    [collection registerNib:[UINib nibWithNibName:@"StoryRootCollectionViewCell" bundle:nil] forCellWithReuseIdentifier:@"StoryRootCollectionViewCell"];
    [collection registerClass:[UICollectionReusableView class] forSupplementaryViewOfKind:UICollectionElementKindSectionHeader withReuseIdentifier:@"Header"];
    
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
    StoryRootCollectionViewCell *cell =  [collectionView dequeueReusableCellWithReuseIdentifier:@"StoryRootCollectionViewCell" forIndexPath:indexPath];
    [cell.ImgaeV sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.row][@"thumb"]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
    cell.titleLnum.text = dataArr[indexPath.row][@"episode"];
    cell.subjectL.text = dataArr[indexPath.row][@"name"];
    return cell;
}

- (UICollectionReusableView *)collectionView:(UICollectionView *)collectionView viewForSupplementaryElementOfKind:(NSString *)kind atIndexPath:(NSIndexPath *)indexPath{
    UICollectionReusableView *headView = [collectionView dequeueReusableSupplementaryViewOfKind:UICollectionElementKindSectionHeader
                                                                            withReuseIdentifier:@"Header"
                                                                                   forIndexPath:indexPath];
    for (UIView *view in headView.subviews) {
        [view removeFromSuperview];
    }
    UIView *backView = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W-32, 16)];
    backView.backgroundColor = [UIColor whiteColor];
    [headView addSubview:backView];
    
    return headView;
}

- ( UIEdgeInsets )collectionView:( UICollectionView *)collectionView layout:( UICollectionViewLayout *)collectionViewLayout insetForSectionAtIndex:( NSInteger )section {
    
    return UIEdgeInsetsMake (  0,20  , 20 ,20 );
    
}

- (void)collectionView:(UICollectionView *)collectionView didSelectItemAtIndexPath:(NSIndexPath *)indexPath{
    [[UIHelper sharedSingleton] pushVC:@"XDX_DetailViewController" vc:self parames:@{@"istype":@(2),@"playerID":dataArr[indexPath.row][@"id"],@"PlayerNum":@(indexPath.row),@"titleStr":titleStr}];
    
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
