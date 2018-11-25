//
//  XDX_MeRootViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/1.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "XDX_MeRootViewController.h"
#import "MeRootTableViewCell.h"
#import "XDX_DetailViewController.h"
@interface XDX_MeRootViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *tableView;
    NSMutableArray *dataArr;
    NSInteger page;
    NSString *NewsID;
}
@end

@implementation XDX_MeRootViewController
- (void)viewWillAppear:(BOOL)animated {
    
    [super viewWillAppear:animated];
}

- (void)viewWillDisappear:(BOOL)animated {
    
//    [[NSNotificationCenter defaultCenter] removeObserver:self name:@"MeStudyData" object:nil];
    [super viewWillDisappear:animated];
}


-(void)dealloc
{
    NSLog(@"RootViewController dealloc--");
}

- (void)viewDidLoad {
    [super viewDidLoad];
    [[NSNotificationCenter defaultCenter] addObserver:self selector:@selector(createFormData:) name:@"MeStudyData" object:nil];
    NewsID = @"";
    dataArr = [[NSMutableArray alloc] init];
    self.view.backgroundColor =COLOR(249, 245, 245);
    self.edgesForExtendedLayout = UIRectEdgeNone;
    [self ctreatTableView];
    
}

///加载数据
-(void)rootLoadData:(NSInteger)index
{
    [dataArr removeAllObjects];
    NewsID = [NSString stringWithFormat:@"%zd",index];
    page = 1;
    [self createData];
    
}

- (void)createFormData:(NSNotification *)dic{
    if ([dic.userInfo[@"backType"]  isEqualToString: NewsID]) {
        [dataArr removeAllObjects];
        [self createData];
        NSLog(@"2333");
    }
    
}

- (void)createData{
    
    [self showHUD:nil];
    WEAKSELF
    NSString *biz=[NSString stringWithFormat:@"&type=%@",NewsID];
    [ConnectionRequestMgr GetSessionWithUrl:SchoolUser parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            if ( ! [ dict[@"data"] isEqual:[NSNull null] ] ) {
            for (int i = 0; i< [dict[@"data"] count]; i++) {
                NSDictionary *dic = dict[@"data"][i];
                [dataArr addObject:dic];
            }
            }
            if (dataArr.count == 0) {
                [weakSelf viewthephoto:@"NoList" andtitle:@"暂无内容"];
            }else{
                [weakSelf removeView];
            }
            [tableView reloadData];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
    
}

- (void)ctreatTableView{
    tableView = [[UITableView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H -118-tabbarH) style:UITableViewStyleGrouped];
    tableView.backgroundColor = COLOR(249, 245, 245);
    tableView.delegate = self;
    tableView.separatorStyle = NO;
    tableView.dataSource = self;
    tableView.showsVerticalScrollIndicator = FALSE;
    tableView.showsHorizontalScrollIndicator = FALSE;
    tableView.tableFooterView = [[UIView alloc] init];
    [self.view addSubview:tableView];
    [tableView registerNib:[UINib nibWithNibName:@"MeRootTableViewCell" bundle:nil] forCellReuseIdentifier:@"MeRootTableViewCell"];
}


#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return dataArr.count;
 
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return 1;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    MeRootTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"MeRootTableViewCell"];
    cell.titleL.text = dataArr[indexPath.row][@"name"];
    [cell.imageV sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.row][@"thumb"]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
    cell.deline.text = [NSString stringWithFormat:@"截止至%@",dataArr[indexPath.row][@"last_time"]];
    NSMutableAttributedString *str = [[NSMutableAttributedString alloc] initWithString:[NSString stringWithFormat:@"已完成%@|剩余%@课时",dataArr[indexPath.row][@"percent"],dataArr[indexPath.row][@"residue"]]];
    NSRange range1 = [[str string] rangeOfString:[NSString stringWithFormat:@"%@",dataArr[indexPath.row][@"percent"]]];
    if ([NewsID isEqualToString:@"1"]) {
        [str addAttribute:NSForegroundColorAttributeName value:[UIColor redColor] range:range1];
    }
    cell.classL.attributedText = str;
    return cell;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 110;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 0.01;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 5;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 5)];
    view.backgroundColor = UIColorFromRGBA(0xf9f5f5, 1);
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
  
    [[UIHelper sharedSingleton] pushVC:@"XDX_DetailViewController" vc:self parames:@{@"istype":@(1),@"playerID":dataArr[indexPath.row][@"id"],@"titleStr":dataArr[indexPath.row][@"name"],@"backType":NewsID}];
    
}


@end
