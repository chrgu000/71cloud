//
//  S_typeViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/6.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "S_typeViewController.h"
#import "S_SubmitViewController.h"
@interface S_typeViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *mainTable;
    NSArray *itemArr;
}
@end

@implementation S_typeViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.title = @"举报类别";
    itemArr = @[@"公款大吃大喝",@"公款旅游（国内）",@"公款出国（境）旅游",@"违规配备使用公车",@"违规建设楼堂馆所",@"津贴补贴违规问题",@"违规收送礼品礼金",@"大办婚丧喜庆事宜",@"接受或用公款参与高消费娱乐健身活动",@"违规出入私人会所",@"培训疗养机构“四风”问题"];
    [self createUI];
}

- (void)createUI{
    UIImageView *backV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H-64)];
    backV.image = [UIImage imageNamed:@"jubao_back"];
    backV.userInteractionEnabled = YES;
    [self.view addSubview:backV];
    
    mainTable = [[UITableView alloc] initWithFrame:CGRectMake(16, 208, SCREEN_W - 32, SCREEN_H -208 - 64-27) style:UITableViewStylePlain];
    mainTable.delegate = self;
    mainTable.dataSource = self;
    mainTable.backgroundColor= [UIColor whiteColor];
    mainTable.layer.masksToBounds = YES;
    mainTable.layer.cornerRadius = 11;
    mainTable.showsVerticalScrollIndicator = FALSE;
    mainTable.showsHorizontalScrollIndicator = FALSE;
    [self.view addSubview:mainTable];

    
    UIImageView *TopV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W - 288,95 , 288, 142)];
    TopV.image = [UIImage imageNamed:@"jubao_top2"];
    [self.view addSubview:TopV];
}

#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return itemArr.count;
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return 1;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    
    static NSString *CellIdentifier = @"NameIdentifier";
    
    UITableViewCell * cell = [tableView dequeueReusableCellWithIdentifier:CellIdentifier];
    if (cell == nil)
    {
        cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleDefault reuseIdentifier:CellIdentifier];
    }
    cell.textLabel.text = itemArr[indexPath.row];
    cell.textLabel.font = Font(14);
    cell.selectionStyle = UITableViewCellSelectionStyleNone;
    cell.accessoryType = UITableViewCellAccessoryDisclosureIndicator;
    return cell;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 40;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 0.01;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 0.01;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    view.backgroundColor = [UIColor whiteColor];
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
    [[UIHelper sharedSingleton] pushVC:@"S_SubmitViewController" vc:self parames:@{@"type":itemArr[indexPath.row]}];
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
