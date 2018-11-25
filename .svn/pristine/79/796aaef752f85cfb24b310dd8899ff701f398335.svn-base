//
//  ExaminePerformanceViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/25.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExaminePerformanceViewController.h"
#import "ExamineRankingViewController.h"
@interface ExaminePerformanceViewController ()

@end

@implementation ExaminePerformanceViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.title = @"答题成绩";
    self.view.backgroundColor = COLOR(247, 247, 247);
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
    PreformanceL.text = @"总分：100分  合格分数线：60分  答卷耗时：17秒";
    PreformanceL.textColor = COLOR(51, 51, 51);
    PreformanceL.font = FontBold(13);
    [downView addSubview:PreformanceL];
    
    
    NSArray *arrTop = @[@"题型",@"总题数",@"答对题数",@"总分",@"得分"];
    NSArray *arrDown = @[@"单选题",@"5",@"1",@"5.0",@"1.0"];
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
    subjectL.text = @"本次考试共5道题，总分100分，您做对1道题，得到20.00分";
    subjectL.textColor = COLOR(102, 102, 102);
    subjectL.font = Font(13);
    subjectL.numberOfLines = 2;
    [subjectBack addSubview:subjectL];
    
    UIButton *sureB = [UIButton buttonWithType:UIButtonTypeCustom];
    sureB.frame = CGRectMake((SCREEN_W-145)/2, CGRectGetMaxY(downView.frame) + 30, 145, 38);
    sureB.layer.masksToBounds = YES;
    sureB.layer.cornerRadius = 7;
    [sureB setBackgroundImage:[UIImage imageNamed:@"prepare_button"] forState:UIControlStateNormal];
    [sureB setTitle:@"下一关" forState:UIControlStateNormal];
    [sureB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    sureB.titleLabel.font = FontBold(14);
    [sureB addTarget:self action:@selector(actionNext) forControlEvents:UIControlEventTouchUpInside];
    [self.view addSubview:sureB];
}

- (void)actionNext{
    NSLog(@"next");
    [[UIHelper sharedSingleton] pushVC:@"ExamineRankingViewController" vc:self parames:nil];
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
