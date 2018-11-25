//
//  Me_IntegralViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/17.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "Me_IntegralViewController.h"
#import "IntegralTableViewCell.h"
@interface Me_IntegralViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *tableView;
    NSMutableArray *dataArr;
    NSInteger page;
    UILabel *jifenL;
    NSString *dateStr;
}

@end

@implementation Me_IntegralViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.title = @"我的积分";
    page = 1;
    dataArr = [[NSMutableArray alloc] init];
    self.view.backgroundColor =COLOR(249, 245, 245);
    NSDateFormatter *formatter = [[NSDateFormatter alloc] init];
    [formatter setDateFormat:@"YYYY-MM"];
    NSDate *datenow = [NSDate date];
    dateStr = [formatter stringFromDate:datenow];
    [self ctreatTableView];
    [self createData];
    [self creatRightNav];
}

- (void)creatRightNav{
    UIButton *RightBtn = [UIButton buttonWithType:UIButtonTypeCustom];
    [RightBtn setFrame:CGRectMake(0, 0, 25, 25)];
    [RightBtn setImage:[UIImage imageNamed:@"Integral_date"] forState:UIControlStateNormal];
    [RightBtn addTarget:self action:@selector(RightAction) forControlEvents:UIControlEventTouchUpInside];
    UIBarButtonItem *submitItem = [[UIBarButtonItem alloc] initWithCustomView:RightBtn];
    self.navigationItem.rightBarButtonItem = submitItem;
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
    NSString *biz=[NSString stringWithFormat:@"&time=%@&p=%zd&pageSize=10",dateStr,page];
    [ConnectionRequestMgr GetSessionWithUrl:ScoreDetail parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf cancelStatus];
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            for (int i = 0; i< [dict[@"data"][@"data"] count]; i++) {
                [dataArr addObject:dict[@"data"][@"data"][i]];
            }
            if (jifenL.text.length == 0) {
              jifenL.text = [NSString stringWithFormat:@"%@",dict[@"data"][@"total_score"]];
            }
            
            if (dataArr.count == 0) {
                [weakSelf viewthephoto:@"" andtitle:@"本月暂无积分"];
            }else{
                [weakSelf removeView];
            }
            [tableView reloadData];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf cancelStatus];
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
}

- (UIView *)createHeadView{
    UIView *back = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 145)];
    back.backgroundColor = [UIColor whiteColor];

    UIImageView *topImageV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 139)];
    topImageV.image = [UIImage imageNamed:@"Integral_banner"];
    [back addSubview:topImageV];
    
    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(30, 30, 120, 15)];
    titleL.text =  @"积分总额";
    titleL.font = Font(14);
    titleL.textAlignment = 1;
    titleL.textColor = [UIColor whiteColor];
    [topImageV addSubview:titleL];
    
    jifenL = [[UILabel alloc] initWithFrame:CGRectMake(30, 60, 120, 32)];
    jifenL.font = Font(32);
    jifenL.textAlignment = 1;
    jifenL.textColor = [UIColor whiteColor];
    [topImageV addSubview:jifenL];
    
    return back;
}

- (void)ctreatTableView{
    tableView = [[UITableView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H -64) style:UITableViewStylePlain];
    tableView.delegate = self;
    tableView.dataSource = self;
    tableView.showsVerticalScrollIndicator = FALSE;
    tableView.showsHorizontalScrollIndicator = FALSE;
    tableView.backgroundColor =COLOR(249, 245, 245);
    tableView.tableHeaderView = [self createHeadView];
    [self.view addSubview:tableView];
    tableView.estimatedRowHeight = 0;
    tableView.estimatedSectionHeaderHeight = 0;
    tableView.estimatedSectionFooterHeight = 0;
    
    [tableView registerNib:[UINib nibWithNibName:@"IntegralTableViewCell" bundle:nil] forCellReuseIdentifier:@"IntegralTableViewCell"];
    tableView.mj_header = [FunClubGifHeader headerWithRefreshingTarget:self refreshingAction:@selector(refresh)];
    tableView.mj_footer = [MJRefreshAutoFooter footerWithRefreshingTarget:self refreshingAction:@selector(loadMore)];
}

- (void)RightAction{
    WSDatePickerView *datepicker = [[WSDatePickerView alloc] initWithDateStyle:DateStyleShowYearMonth CompleteBlock:^(NSDate *selectDate) {
        dateStr = [selectDate stringWithFormat:@"yyyy-MM"];
        [self removeView];
        [self refresh];
    }];
    
    [datepicker show];
    
}

#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return dataArr.count;
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return 1;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    IntegralTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"IntegralTableViewCell"];
    cell.selectionStyle = UITableViewCellSelectionStyleNone;
    cell.typeL.text = dataArr[indexPath.row][@"type"];
    cell.subjectL.text = dataArr[indexPath.row][@"name"];
    cell.deline.text =  dataArr[indexPath.row][@"ctime"];
    cell.jifenNum.text = [NSString stringWithFormat:@"+%@",dataArr[indexPath.row][@"score"]];
    return cell;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 65;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 0.01;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 0.01;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
   
}


- (void)cancelStatus
{
    if ([tableView.mj_header isRefreshing]) {
        [tableView.mj_header endRefreshing];
    }else if ([tableView.mj_footer isRefreshing]) {
        [tableView.mj_footer endRefreshing];
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
