//
//  ExaminePerformanceViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/25.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExaminePerformanceViewController.h"
#import "ExamineRankingViewController.h"
#import "ExamineViewController.h"
#import "ExaminePrepareViewController.h"
@interface ExaminePerformanceViewController ()
{
    UIButton *sureB;
}
@end

@implementation ExaminePerformanceViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.title = @"答题成绩";
    self.view.backgroundColor = COLOR(247, 247, 247);
    
     self.navigationItem.leftBarButtonItem = [[UIBarButtonItem alloc] initWithImage:[[UIImage imageNamed:@"back"] imageWithRenderingMode:UIImageRenderingModeAlwaysOriginal] style:UIBarButtonItemStylePlain target:self action:@selector(back_action)];
    
    [self createUI];
}

- (void)createUI{
    
    UIView *topView = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 200)];
    topView.backgroundColor = [UIColor whiteColor];
    [self.view addSubview:topView];
    
    UIImageView *imageV = [[UIImageView alloc] initWithFrame:CGRectMake((SCREEN_W-121)/2, 30.5, 121, 112)];
    imageV.image = [UIImage imageNamed:@"f_icon"];
    [topView addSubview:imageV];
    
    UIView *downView = [[UIView alloc] initWithFrame:CGRectMake(16, CGRectGetMaxY(topView.frame) + 30, SCREEN_W -32, 210)];
    downView.backgroundColor = [UIColor whiteColor];
    downView.layer.masksToBounds = YES;
    downView.layer.cornerRadius = 7;
    [self.view addSubview:downView];
    
    
    
    UILabel *PreformanceL = [[UILabel alloc] initWithFrame:CGRectMake(11.5, 15, SCREEN_W -23 - 32, 13)];
    PreformanceL.textColor = COLOR(51, 51, 51);
    NSMutableAttributedString *str = [[NSMutableAttributedString alloc] initWithString:[NSString stringWithFormat:@"总分：%@分  合格分数线：%@分  答卷耗时：%@秒",self.dict[@"exam_score"],self.dict[@"pass_score"],self.dict[@"use_time"]]];
    NSRange range1 = [[str string] rangeOfString:[NSString stringWithFormat:@"%@",self.dict[@"exam_score"]]];
    [str addAttribute:NSForegroundColorAttributeName value:COLOR(0, 204, 118) range:range1];
    NSRange range2 = [[str string] rangeOfString:[NSString stringWithFormat:@"%@",self.dict[@"pass_score"]]];
    [str addAttribute:NSForegroundColorAttributeName value:COLOR(0, 204, 118) range:range2];
    NSRange range3 = [[str string] rangeOfString:[NSString stringWithFormat:@"%@",self.dict[@"use_time"]]];
    [str addAttribute:NSForegroundColorAttributeName value:COLOR(0, 204, 118) range:range3];
    PreformanceL.attributedText = str;
    PreformanceL.font = FontBold(13);
    [downView addSubview:PreformanceL];
    
    
    NSArray *arrTop = @[@"题型",@"总题数",@"答对题数",@"总分",@"得分"];
    NSArray *arrDown = @[@"单选题",[NSString stringWithFormat:@"%@",self.dict[@"exam_questions_num"]] ,[NSString stringWithFormat:@"%@",self.dict[@"right_num"]],[NSString stringWithFormat:@"%@",self.dict[@"exam_score"]],[NSString stringWithFormat:@"%@",self.dict[@"result_score"]]];
    for (int i = 0; i<5; i++) {
        UILabel *topL = [[UILabel alloc] initWithFrame:CGRectMake(11.5+i* (SCREEN_W -32-23)/5,CGRectGetMaxY(PreformanceL.frame) + 19, (SCREEN_W -32-23)/5, 32)];
        topL.backgroundColor = COLOR(250, 217, 214);
        topL.layer.borderWidth = 0.5;
        topL.layer.borderColor = COLOR(229, 229, 229).CGColor;
        topL.text =arrTop[i];
        topL.textColor = COLOR(51, 51, 51);
        topL.font = Font(13);
        topL.textAlignment = 1;
        [downView addSubview:topL];
        
        UILabel *DownL = [[UILabel alloc] initWithFrame:CGRectMake(11.5+i* (SCREEN_W -32-23)/5,CGRectGetMaxY(topL.frame), (SCREEN_W -32-23)/5, 32)];
        DownL.layer.borderWidth = 0.5;
        DownL.layer.borderColor = COLOR(229, 229, 229).CGColor;
        DownL.text = arrDown[i];
        DownL.textColor = COLOR(102, 102, 102);
        DownL.font = Font(13);
        DownL.textAlignment = 1;
        [downView addSubview:DownL];
        
    }
    
    UIView *subjectBack = [[UIView alloc] initWithFrame:CGRectMake(11.5, CGRectGetMaxY(PreformanceL.frame) + 19 +2*32, SCREEN_W -23 - 32, 60)];
    subjectBack.backgroundColor = COLOR(247, 247, 247);
    subjectBack.layer.borderWidth = 0.5;
    subjectBack.layer.borderColor = COLOR(229, 229, 229).CGColor;
    [downView addSubview:subjectBack];
    
    UILabel *subjectL = [[UILabel alloc] initWithFrame:CGRectMake(11.5, 10, SCREEN_W - 23 -32 -23, 35)];
    subjectL.textColor = COLOR(102, 102, 102);
    subjectL.font = Font(13);
    subjectL.numberOfLines = 2;
    NSMutableAttributedString *strSub = [[NSMutableAttributedString alloc] initWithString:[NSString stringWithFormat:@"本次考试共%@道题，总分%@分，您做对%@道题，得到%@分",self.dict[@"exam_questions_num"],self.dict[@"exam_score"],self.dict[@"right_num"],self.dict[@"result_score"]]];
    NSRange rangeSub = [[strSub string] rangeOfString:[NSString stringWithFormat:@"%@",self.dict[@"result_score"]]];
    [strSub addAttribute:NSForegroundColorAttributeName value:COLOR(239, 81, 81) range:rangeSub];
    subjectL.attributedText = strSub;
    [subjectBack addSubview:subjectL];
    
    sureB = [UIButton buttonWithType:UIButtonTypeCustom];
    sureB.frame = CGRectMake((SCREEN_W-145)/2, CGRectGetMaxY(downView.frame) + 30, 145, 38);
    sureB.layer.masksToBounds = YES;
    sureB.layer.cornerRadius = 7;
    [sureB setBackgroundImage:[UIImage imageNamed:@"prepare_button"] forState:UIControlStateNormal];
    if ([[NSString stringWithFormat:@"%@",self.dict[@"ranking_type"]] isEqualToString:@"0"]) {
        [sureB setTitle:@"下一关" forState:UIControlStateNormal];
    }else{
        [sureB setTitle:@"查看排名" forState:UIControlStateNormal];
    }
    [sureB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    sureB.titleLabel.font = FontBold(14);
    [sureB addTarget:self action:@selector(actionNext) forControlEvents:UIControlEventTouchUpInside];
    [self.view addSubview:sureB];
}

- (void)actionNext{
    NSLog(@"next");
    if ([[NSString stringWithFormat:@"%@",self.dict[@"ranking_type"]] isEqualToString:@"0"]) {
        if ([self.dict[@"is_pass"] isEqualToString:@"1"]) {
            for (UIView *view in [self.view subviews]) {

                [view removeFromSuperview];
            }
            [self showHUD:nil];
            WEAKSELF
            NSDictionary *biz = @{@"paper_id":self.dict[@"next_id"],@"activity_id":self.activity_id};
            [ConnectionRequestMgr POSTSessionWithUrl:examapiChoose parameter:biz successBlock:^(NSDictionary *dict) {
                [weakSelf hideHUD];
                if ([dict[@"code"] integerValue] == 1) {
                    self.dict = dict[@"data"];
                    [self createUI];
//                    if ([[NSString stringWithFormat:@"%@",dict[@"data"][@"is_pass"]] isEqualToString:@"0"]) {
//                        [[UIHelper sharedSingleton] pushVC:@"ExaminePrepareViewController" vc:self  parames:@{@"titleName":dataArr[indexPath.section][@"paper_info"][indexPath.row][@"exampaper_name"],@"dict":dict[@"data"],@"activity_id":[NSString stringWithFormat:@"%@",dataArr[indexPath.section][@"activity_id"]],@"paper_id":[NSString stringWithFormat:@"%@",dataArr[indexPath.section][@"paper_info"][indexPath.row][@"paper_id"]]}];
//                    }else if ([[NSString stringWithFormat:@"%@",dict[@"data"][@"is_pass"]] isEqualToString:@"1"]){
//                        [[UIHelper sharedSingleton] pushVC:@"ExaminePerformanceViewController" vc:self  parames:@{@"dict":dict[@"data"],@"activity_id":[NSString stringWithFormat:@"%@",dataArr[indexPath.section][@"activity_id"]]}];
//                    }else if ([[NSString stringWithFormat:@"%@",dict[@"data"][@"is_pass"]] isEqualToString:@"2"]){
//                        [weakSelf showError:@"上一关还没通过，请先通过上一关"];
//                    }
                    
                }else{
                    [weakSelf showError:dict[@"msg"]];
                }
            } failBlock:^(NSString *errorStr) {
                [weakSelf hideHUD];
                [weakSelf showError:errorStr];
            }];
        }else{
            [[UIHelper sharedSingleton] pushVC:@"ExaminePrepareViewController" vc:self parames:@{@"activity_id":self.activity_id,@"paper_id":self.dict[@"next_id"],@"dict":self.dict,@"titleName":self.dict[@"exampaper_name"]}];
        }
        
    }else{
        [[UIHelper sharedSingleton] pushVC:@"ExamineRankingViewController" vc:self parames:@{@"activity_id":self.activity_id}];
    }
    
   

}


- (void)back_action{
    for (UIViewController *controller in self.navigationController.viewControllers) {
        if ([controller isKindOfClass:[ExamineViewController class]]) {
            [self.navigationController popToViewController:controller animated:YES];
        }
    }
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
