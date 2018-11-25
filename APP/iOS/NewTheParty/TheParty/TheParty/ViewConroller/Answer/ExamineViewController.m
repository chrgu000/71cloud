//
//  ExamineViewController.m
//  TheParty
//
//  Created by macmini on 2018/7/31.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExamineViewController.h"
#import "ExamineHomeTableViewCell.h"
#import "ExaminePrepareViewController.h"
#import "ExaminePerformanceViewController.h"
#import "WSDatePickerView.h"
@interface ExamineViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *mainTable;
    NSArray  *dataArr;
    UIView *Backview;
    
}
@end

@implementation ExamineViewController


- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"在线考试";
    dataArr = [[NSArray alloc] init];
    self.view.backgroundColor = COLOR(249, 245, 245);
//    [self topHeadView];
    [self creatData];
//     [self creatUI];
}

- (void)creatData{
    [self showHUD:nil];
    WEAKSELF
    [ConnectionRequestMgr POSTSessionWithUrl:examapiHome parameter:nil successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
             dataArr = dict[@"data"];
             [self topHeadView];
             [self creatUI];
        }else{
            [weakSelf showError:dict[@"msg"]];
            [self setEmptyPlaceholder];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
        [self setEmptyPlaceholder];
    }];
}

- (void)setEmptyPlaceholder{
    Backview = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H - 64 - 44)];
    Backview.userInteractionEnabled = YES;
    UIImageView *imgV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, 184, 137)];
    imgV.center = Backview.center;
    imgV.image = [UIImage imageNamed:@"NoInter"];
    imgV.userInteractionEnabled = YES;
    [Backview addSubview:imgV];
    
    UILabel *lab = [[UILabel alloc] initWithFrame:CGRectMake(0,CGRectGetMaxY(imgV.frame)+ 12, SCREEN_W, 15)];
    lab.font = Font(15);
    lab.textColor = UIColorFromRGBA(0x000000, 1);
    lab.text = @"点击屏幕，重新加载";
    lab.textAlignment = 1;
    [Backview addSubview:lab];
    
    UITapGestureRecognizer *click = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(creatData)];
    [Backview addGestureRecognizer:click];
    
    [self.view addSubview:Backview];
    
}



- (void)topHeadView{
    
    ThePartySingTon *insance = [ThePartySingTon SharedInstance];
    
    UIImageView *topView = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W , 167)];
    topView.image = [UIImage imageNamed:@"jianban"];
    [self.view addSubview:topView];
    
    UILabel *leftL = [[UILabel alloc] initWithFrame:CGRectMake(16, 46, 130, 18)];
    leftL.text = @"党员答题测试";
    leftL.textColor = [UIColor whiteColor];
    leftL.font = Font(18);
    [topView addSubview:leftL];
    
    UIImageView *rightBackV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W -170, 38, 170 , 34)];
    rightBackV.image = [UIImage imageNamed:@"gongsiming-di"];
    [topView addSubview:rightBackV];
    
    UILabel *rightL = [[UILabel alloc] initWithFrame:CGRectMake(16, 0, 138, 34)];
    rightL.text = insance.user.company_name;
    rightL.textColor = [UIColor whiteColor];
    rightL.font = Font(13);
    [rightBackV addSubview:rightL];
}

- (void)creatUI{
    
    mainTable = [[UITableView alloc] initWithFrame:CGRectMake(16, 110, SCREEN_W -32, SCREEN_H - 174) style:UITableViewStyleGrouped];
    mainTable.backgroundColor = [UIColor clearColor];
    mainTable.layer.masksToBounds = YES;
    mainTable.layer.cornerRadius = 5;
    mainTable.dataSource = self;
    mainTable.delegate = self;
    mainTable.bounces = NO;
    mainTable.showsVerticalScrollIndicator = FALSE;
    mainTable.showsHorizontalScrollIndicator = FALSE;
    mainTable.tableFooterView = [[UIView alloc] init];
    mainTable.separatorStyle = UITableViewCellSeparatorStyleNone;
    [self.view addSubview:mainTable];
    [mainTable registerNib:[UINib nibWithNibName:@"ExamineHomeTableViewCell" bundle:nil] forCellReuseIdentifier:@"ExamineHomeTableViewCell"];
}

#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
   return [dataArr[section][@"paper_info"] count];
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return dataArr.count;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    ExamineHomeTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"ExamineHomeTableViewCell"];
    cell.titleL.text = dataArr[indexPath.section][@"paper_info"][indexPath.row][@"exampaper_name"];
    return cell;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 40;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 40;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 100;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W-32, 100)];
    view.backgroundColor = [UIColor whiteColor];
    
    UIRectCorner rectCorner = UIRectCornerTopLeft | UIRectCornerTopRight;
    //任意视图
    UIBezierPath *bezierPath = [UIBezierPath bezierPathWithRoundedRect:view.bounds byRoundingCorners:rectCorner cornerRadii:CGSizeMake(5, 5)];
    CAShapeLayer *maskLayer = [[CAShapeLayer alloc] init];
    maskLayer.frame = view.bounds;
    maskLayer.path = bezierPath.CGPath;
    view.layer.mask = maskLayer;
    
    UIImageView *imageV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W -32, 94.5)];
    [imageV sd_setImageWithURL:[NSURL URLWithString:dataArr[section][@"img_src"]] placeholderImage:[UIImage imageNamed:@"ban1"]];
    [view addSubview:imageV];
    
    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(62, 28, 150, 18)];
    titleL.text = dataArr[section][@"exam_activity_name"];
    titleL.textColor = COLOR(232, 51, 41);
    titleL.font = Font(18);
    [imageV addSubview:titleL];
    
    UILabel *line = [[UILabel alloc] initWithFrame:CGRectMake(62, CGRectGetMaxY(titleL.frame) + 12, 28, 2)];
    line.backgroundColor = COLOR(232, 51, 41);
    line.layer.masksToBounds = YES;
    line.layer.cornerRadius = 1;
    [imageV addSubview:line];
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W-32, 40)];
    view.backgroundColor = COLOR(249, 245, 245);
    

    UIView *footView = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W -32, 22)];
    footView.backgroundColor = [UIColor whiteColor];
    UIRectCorner rectCorner = UIRectCornerBottomLeft | UIRectCornerBottomRight;
    //任意视图
    UIBezierPath *bezierPath = [UIBezierPath bezierPathWithRoundedRect:footView.bounds byRoundingCorners:rectCorner cornerRadii:CGSizeMake(5, 5)];
    CAShapeLayer *maskLayer = [[CAShapeLayer alloc] init];
    maskLayer.frame = footView.bounds;
    maskLayer.path = bezierPath.CGPath;
    footView.layer.mask = maskLayer;
    
    [view addSubview:footView];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
    [tableView deselectRowAtIndexPath:indexPath animated:NO];
    [self showHUD:nil];
    WEAKSELF
    NSDictionary *biz = @{@"paper_id":dataArr[indexPath.section][@"paper_info"][indexPath.row][@"paper_id"],@"activity_id":dataArr[indexPath.section][@"activity_id"]};
    [ConnectionRequestMgr POSTSessionWithUrl:examapiChoose parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            if ([[NSString stringWithFormat:@"%@",dict[@"data"][@"is_pass"]] isEqualToString:@"0"]) {
                [[UIHelper sharedSingleton] pushVC:@"ExaminePrepareViewController" vc:self  parames:@{@"titleName":dataArr[indexPath.section][@"paper_info"][indexPath.row][@"exampaper_name"],@"dict":dict[@"data"],@"activity_id":[NSString stringWithFormat:@"%@",dataArr[indexPath.section][@"activity_id"]],@"paper_id":[NSString stringWithFormat:@"%@",dataArr[indexPath.section][@"paper_info"][indexPath.row][@"paper_id"]]}];
            }else if ([[NSString stringWithFormat:@"%@",dict[@"data"][@"is_pass"]] isEqualToString:@"1"]){
                [[UIHelper sharedSingleton] pushVC:@"ExaminePerformanceViewController" vc:self  parames:@{@"dict":dict[@"data"],@"activity_id":[NSString stringWithFormat:@"%@",dataArr[indexPath.section][@"activity_id"]]}];
            }else if ([[NSString stringWithFormat:@"%@",dict[@"data"][@"is_pass"]] isEqualToString:@"2"]){
                [weakSelf showError:@"上一关还没通过，请先通过上一关"];
            }
            
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
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
