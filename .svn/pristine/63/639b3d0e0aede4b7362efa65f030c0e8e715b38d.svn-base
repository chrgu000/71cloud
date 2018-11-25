//
//  ExamineViewController.m
//  TheParty
//
//  Created by macmini on 2018/7/31.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExamineViewController.h"
#import "ExamineHomeTableViewCell.h"
@interface ExamineViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *mainTable;
    
}
@end

@implementation ExamineViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"在线考试";
    self.view.backgroundColor = COLOR(249, 245, 245);
    [self topHeadView];
    [self creatUI];
    
}

- (void)topHeadView{
    
    UIImageView *topView = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W , 167)];
    topView.image = [UIImage imageNamed:@"jianban"];
    [self.view addSubview:topView];
    
    UILabel *leftL = [[UILabel alloc] initWithFrame:CGRectMake(16, 46, 110, 18)];
    leftL.text = @"党员答题测试";
    leftL.textColor = [UIColor whiteColor];
    leftL.font = Font(18);
    [topView addSubview:leftL];
    
    UIImageView *rightBackV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W -160, 38, 160 , 34)];
    rightBackV.image = [UIImage imageNamed:@"gongsiming-di"];
    [topView addSubview:rightBackV];
    
    UILabel *rightL = [[UILabel alloc] initWithFrame:CGRectMake(16, 0, 128, 34)];
    rightL.text = @"武汉纺友技术有限公司";
    rightL.textColor = [UIColor whiteColor];
    rightL.font = Font(13);
    [rightBackV addSubview:rightL];
}

- (void)creatUI{
    
    mainTable = [[UITableView alloc] initWithFrame:CGRectMake(16, 110, SCREEN_W -32, SCREEN_H - 174) style:UITableViewStyleGrouped];
    mainTable.backgroundColor = [UIColor clearColor];
    mainTable.dataSource = self;
    mainTable.delegate = self;
    mainTable.bounces = NO;
    mainTable.tableFooterView = [[UIView alloc] init];
    [self.view addSubview:mainTable];
    [mainTable registerNib:[UINib nibWithNibName:@"ExamineHomeTableViewCell" bundle:nil] forCellReuseIdentifier:@"ExamineHomeTableViewCell"];
}

#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
   return 3;
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return 4;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    ExamineHomeTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"ExamineHomeTableViewCell"];
    cell.titleL.text = @"第一关：学党章";
    return cell;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 52;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 40;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 100;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 94.5)];
    view.backgroundColor = [UIColor whiteColor];
    UIImageView *imageV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W -32, 94.5)];
    imageV.image = [UIImage imageNamed:@"ban1"];
    [view addSubview:imageV];
    
    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(31, 28, 150, 18)];
    titleL.text = @"两学一做";
    titleL.textColor = COLOR(232, 51, 41);
    titleL.font = Font(18);
    [view addSubview:titleL];
    
    UILabel *line = [[UILabel alloc] initWithFrame:CGRectMake(31, CGRectGetMaxY(titleL.frame) + 12, 28, 2)];
    line.backgroundColor = COLOR(232, 51, 41);
    line.layer.masksToBounds = YES;
    line.layer.cornerRadius = 1;
    [view addSubview:line];
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
    
    UILabel *line = [[UILabel alloc] initWithFrame:CGRectMake(14, 0, SCREEN_W-28-32, 1)];
    line.backgroundColor = COLOR(229, 229, 229);
    [footView addSubview:line];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
    
    
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
