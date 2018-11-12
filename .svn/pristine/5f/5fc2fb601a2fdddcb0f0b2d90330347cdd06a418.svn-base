//
//  ExamineRankingViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/25.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExamineRankingViewController.h"
#import "ExamineRankingTableViewCell.h"
@interface ExamineRankingViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *mainTable;
    NSDictionary *dataDic;
}
@end

@implementation ExamineRankingViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"答题排行榜";
    [self creatData];
    
}

- (void)creatData{
    [self showHUD:nil];
    WEAKSELF
    NSString *biz = [NSString stringWithFormat:@"&activity_id=%@", self.activity_id];
    [ConnectionRequestMgr GetSessionWithUrl:examapiRanking parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            dataDic = dict[@"data"];
            [self creatUI];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
    
}

- (void)creatUI{
    
    mainTable = [[UITableView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H - 68) style:UITableViewStyleGrouped];
    mainTable.backgroundColor = [UIColor clearColor];
    mainTable.dataSource = self;
    mainTable.delegate = self;
    mainTable.bounces = NO;
    mainTable.showsVerticalScrollIndicator = FALSE;
    mainTable.showsHorizontalScrollIndicator = FALSE;
    mainTable.tableFooterView = [[UIView alloc] init];
    mainTable.tableHeaderView = [self creatHeadView];
    mainTable.separatorStyle = UITableViewCellSeparatorStyleNone;
    [self.view addSubview:mainTable];
    [mainTable registerNib:[UINib nibWithNibName:@"ExamineRankingTableViewCell" bundle:nil] forCellReuseIdentifier:@"ExamineRankingTableViewCell"];
}

- (UIView *)creatHeadView{
    UIView *backV = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 195 +24)];
    backV.backgroundColor = COLOR(247, 247, 247);
    
    UIImageView *imageV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 160)];
    imageV.image = [UIImage imageNamed:@"Ranking_banner"];
    [backV addSubview:imageV];
    
    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(16.5,CGRectGetMaxY(imageV.frame) + 11, SCREEN_W -33, 16)];
    titleL.text = [NSString stringWithFormat:@"您的得分：%@分 您的名次：%@",[NSString stringWithFormat:@"%@",dataDic[@"avg_score"]],dataDic[@"ranking"]];
    titleL.textColor =COLOR(51, 51, 51);
    titleL.font = Font(16);
    [backV addSubview:titleL];
    
    UIView *downBack = [[UIView alloc] initWithFrame:CGRectMake(0, 195, SCREEN_W, 24)];
    downBack.backgroundColor = COLOR(255, 255, 255);
    [backV addSubview:downBack];
    
    UILabel *numL = [[UILabel alloc] initWithFrame:CGRectMake(19.5,9, 30, 14)];
    numL.text = @"名次";
    numL.textColor =COLOR(0, 0, 0);
    numL.font = Font(14);
    [downBack addSubview:numL];
    
    UILabel *nameL = [[UILabel alloc] initWithFrame:CGRectMake(77,9, 30, 14)];
    nameL.text = @"姓名";
    nameL.textColor =COLOR(0, 0, 0);
    nameL.font = Font(14);
    [downBack addSubview:nameL];
    
    UILabel *timeL = [[UILabel alloc] initWithFrame:CGRectMake(SCREEN_W -60,9, 30, 14)];
    timeL.text = @"用时";
    timeL.textColor =COLOR(0, 0, 0);
    timeL.font = Font(14);
    [downBack addSubview:timeL];
    
    UILabel *defenL = [[UILabel alloc] initWithFrame:CGRectMake(SCREEN_W -125,9, 30, 14)];
    defenL.text = @"得分";
    defenL.textColor =COLOR(0, 0, 0);
    defenL.font = Font(14);
    [downBack addSubview:defenL];
    
    return backV;
}

#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return [dataDic[@"use"] count];
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return 1;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    ExamineRankingTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"ExamineRankingTableViewCell"];
    if (indexPath.row ==0) {
        cell.numImageV.image = [UIImage imageNamed:@"Ranking_no1"];
    }else if (indexPath.row == 1){
        cell.numImageV.image = [UIImage imageNamed:@"Ranking_no2"];
    }else if (indexPath.row ==2){
        cell.numImageV.image = [UIImage imageNamed:@"Ranking_no3"];
    }else{
        cell.numImageV.image = [UIImage imageNamed:@""];
    }
    cell.numL.text = [NSString stringWithFormat:@"%zd",indexPath.row + 1];
    cell.nameL.text = dataDic[@"use"][indexPath.row][@"username"];
    cell.fenL.text = [NSString stringWithFormat:@"%@",dataDic[@"use"][indexPath.row][@"score"]];
    cell.delineL.text = [self timeDeline:dataDic[@"use"][indexPath.row][@"long_time"]];
    
    
    NSString *timeStampString  =  dataDic[@"use"][indexPath.row][@"time"];
    NSTimeInterval interval =[timeStampString doubleValue];
    NSDate *date = [NSDate dateWithTimeIntervalSince1970:interval];
    NSDateFormatter *formatter = [[NSDateFormatter alloc] init];
    [formatter setDateFormat:@"yyyy年MM月dd日"];
    NSString *dateString  = [formatter stringFromDate: date];
    
    cell.timeL.text = dateString;
    return cell;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 76;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 0.01;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 0.01;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.01)];
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.01)];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
    [tableView deselectRowAtIndexPath:indexPath animated:NO];

    
}


- (NSString *)timeDeline:(NSString *)str{
    
    NSString *str_hour = [NSString stringWithFormat:@"%02ld",[str integerValue]/3600];
    NSString *str_minute = [NSString stringWithFormat:@"%02ld",([str integerValue]%3600)/60];
    NSString *str_second = [NSString stringWithFormat:@"%02ld",[str integerValue]%60];
    NSString *format_time = [NSString stringWithFormat:@"%@:%@:%@",str_hour,str_minute,str_second];
    //修改倒计时标签现实内容
    return [NSString stringWithFormat:@"%@",format_time];
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
