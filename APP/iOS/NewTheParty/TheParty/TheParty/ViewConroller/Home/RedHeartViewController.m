//
//  RedHeartViewController.m
//  TheParty
//
//  Created by macmini on 2018/7/31.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "RedHeartViewController.h"
#import "RedHearTableViewCell.h"
#import "ContributeViewController.h"
#import "RedHearRightTableViewCell.h"
@interface RedHeartViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *mainTable;
}

@end

@implementation RedHeartViewController

#pragma mark - 初始化wkWebView


- (void)viewDidLoad {
    [super viewDidLoad];
    self.view.backgroundColor = COLOR(243, 222, 188);
    self.title = @"一颗红心";
    [self CreateUI];
}

- (void)CreateUI{
    mainTable = [[UITableView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H -64) style:UITableViewStyleGrouped];
    mainTable.backgroundColor = [UIColor clearColor];
    mainTable.delegate = self;
    mainTable.separatorStyle = NO;
    mainTable.dataSource = self;
    mainTable.bounces = NO;
    mainTable.showsVerticalScrollIndicator = FALSE;
    mainTable.showsHorizontalScrollIndicator = FALSE;
    mainTable.tableHeaderView = [self CreateHeardView];
    mainTable.tableFooterView = [self CreateFootView];
    [self.view addSubview:mainTable];
    [mainTable registerNib:[UINib nibWithNibName:@"RedHearTableViewCell" bundle:nil] forCellReuseIdentifier:@"RedHearTableViewCell"];
    [mainTable registerNib:[UINib nibWithNibName:@"RedHearRightTableViewCell" bundle:nil] forCellReuseIdentifier:@"RedHearRightTableViewCell"];
    
    
//    tableView.estimatedRowHeight = 0;
//    tableView.estimatedSectionHeaderHeight = 0;
//    tableView.estimatedSectionFooterHeight = 0;
//    tableView.mj_header = [FunClubGifHeader headerWithRefreshingTarget:self refreshingAction:@selector(refresh)];
//    tableView.mj_footer = [MJRefreshAutoFooter footerWithRefreshingTarget:self refreshingAction:@selector(loadMore)];
    
}

- (UIView *)CreateHeardView{
    UIImageView *topView = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 180)];
    topView.image = [UIImage imageNamed:@"redHreat_Top"];
    return topView;
}

- (UIView *)CreateFootView{
    UIView *donwView = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 110)];
    
    UIButton *previousB = [UIButton buttonWithType:UIButtonTypeCustom];
    previousB.frame = CGRectMake(65, 5, 60, 30);
    [previousB setTitle:@"＜ 上一页" forState:UIControlStateNormal];
    previousB.tag = 205;
    [previousB setTitleColor:COLOR(160, 104, 1) forState:UIControlStateNormal];
    previousB.titleLabel.font = Font(12);
    [previousB addTarget:self action:@selector(PageAction:) forControlEvents:UIControlEventTouchUpInside];
    [donwView addSubview:previousB];
    
    UIButton *NextB = [UIButton buttonWithType:UIButtonTypeCustom];
    NextB.frame = CGRectMake(SCREEN_W - 60- 65, 5, 60, 30);
    [NextB setTitle:@"下一页 ＞" forState:UIControlStateNormal];
    NextB.tag = 206;
    NextB.titleLabel.font = Font(12);
    [NextB setTitleColor:COLOR(160, 104, 1) forState:UIControlStateNormal];
    [NextB addTarget:self action:@selector(PageAction:) forControlEvents:UIControlEventTouchUpInside];
    [donwView addSubview:NextB];
    
    UIButton *sureB =[UIButton buttonWithType:UIButtonTypeCustom];
    sureB.frame = CGRectMake((SCREEN_W - 225)/2,CGRectGetMaxY(NextB.frame)+ 10, 225, 36);
    sureB.backgroundColor = [UIColor redColor];
    [sureB setTitle:@"提交投稿" forState:UIControlStateNormal];
    sureB.titleLabel.font = Font(16);
    [sureB setTitleColor:COLOR(255, 255, 255) forState:UIControlStateNormal];
    [sureB addTarget:self action:@selector(SureAction) forControlEvents:UIControlEventTouchUpInside];
    sureB.layer.cornerRadius = 18;
    sureB.layer.masksToBounds = YES;
    [donwView addSubview:sureB];
    

    return donwView;
}

- (void)PageAction:(UIButton *)sender{
    if (sender.tag == 205) {
        NSLog(@"1");
    }else{
        NSLog(@"2");
    }
    
}

- (void)SureAction{
    NSLog(@"sure");
    [[UIHelper sharedSingleton] pushVC:@"ContributeViewController" vc:self parames:nil];
    
}

#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return 1;
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return 6;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    if (indexPath.section%2==0) {
        RedHearTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"RedHearTableViewCell"];
        cell.backgroundColor = [UIColor clearColor];
        return cell;
    }else{
        RedHearRightTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"RedHearRightTableViewCell"];
        cell.backgroundColor = [UIColor clearColor];
        return cell;
    }

    
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 150;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 10;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 0.01;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 10)];
    view.backgroundColor = [UIColor clearColor];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
  
}




// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}


@end
