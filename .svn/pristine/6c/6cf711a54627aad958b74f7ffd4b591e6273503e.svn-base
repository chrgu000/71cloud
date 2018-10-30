//
//  SupervisionViewController.m
//  TheParty
//
//  Created by macmini on 2018/7/31.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "SupervisionViewController.h"
#import "S_typeViewController.h"
@interface SupervisionViewController ()
{
    UIButton *sureB;
}
@end

@implementation SupervisionViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"群众监督";
    [self createUI];
}

- (void)createUI{
    UIImageView *backV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H-64)];
    backV.image = [UIImage imageNamed:@"jubao_back"];
    backV.userInteractionEnabled = YES;
    [self.view addSubview:backV];
    
    UIView *titleBack = [[UIView alloc] initWithFrame:CGRectMake(34, 208, SCREEN_W - 68, 220)];
    titleBack.backgroundColor = [UIColor whiteColor];
    [backV addSubview:titleBack];
    
    UILabel *topL= [[UILabel alloc] initWithFrame:CGRectMake(0, 22, SCREEN_W - 68, 16)];
    topL.text = @"举报须知";
    topL.textColor = [UIColor redColor];
    topL.font = FontBold(16);
    topL.textAlignment = 1;
    [titleBack addSubview:topL];
    
    UILabel *subjectL= [[UILabel alloc] initWithFrame:CGRectMake(18, 55, SCREEN_W - 68 -36, 135)];
    subjectL.text = @"    本系统受理反映“四风”问题举报，具体包括公款大吃大喝、公款旅游（国内）、公款出国（境）旅游、违规配备使用公车、违规建设楼堂馆所、津贴补贴违规问题、违规收送礼品礼金、大办婚丧喜庆事宜、提供或接受超标准接待、接受或用公款参与高消费娱乐健身活动、违规出入私人会所、培训疗养机构“四风”问题。";
    subjectL.textColor = UIColorFromRGBA(0x666666, 1);
    subjectL.font = FontBold(14);
    subjectL.numberOfLines = 0;
    [titleBack addSubview:subjectL];
    
    UIImageView *TopV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W - 288,95 , 288, 142)];
    TopV.image = [UIImage imageNamed:@"jubao_top2"];
    [self.view addSubview:TopV];
    
    sureB = [UIButton buttonWithType:UIButtonTypeCustom];
    sureB.frame = CGRectMake(52, CGRectGetMaxY(titleBack.frame) + 10, 130, 20);
    [sureB setTitle:@"我已经阅读以上条款" forState:UIControlStateNormal];
    [sureB setTitleColor:UIColorFromRGBA(0x666666, 1) forState:UIControlStateNormal];
    [sureB setImage:[UIImage imageNamed:@"jubao_kuang"] forState:UIControlStateNormal];
    [sureB setImage:[UIImage imageNamed:@"jubao_gou"] forState:UIControlStateSelected];
    sureB.selected = YES;
    sureB.titleLabel.font = Font(12);
    [sureB addTarget:self action:@selector(changeAction:) forControlEvents:UIControlEventTouchUpInside];
    [sureB setTitleEdgeInsets:UIEdgeInsetsMake(0, 0, 0, -5)];
    [sureB setImageEdgeInsets:UIEdgeInsetsMake(0, -5, 0, 0)];
    [backV addSubview:sureB];
    
    UIButton *nextBtn = [UIButton buttonWithType:UIButtonTypeCustom];
    nextBtn.frame = CGRectMake(51, CGRectGetMaxY(sureB.frame) + 30, SCREEN_W - 102, 46);
    [nextBtn setTitle:@"我要举报" forState:UIControlStateNormal];
    [nextBtn setTitleColor:UIColorFromRGBA(0xffffff, 1) forState:UIControlStateNormal];
    nextBtn.backgroundColor = [UIColor redColor];
    nextBtn.layer.masksToBounds = YES;
    nextBtn.layer.cornerRadius = 11;
    nextBtn.titleLabel.font = Font(18);
    [nextBtn addTarget:self action:@selector(nextAction) forControlEvents:UIControlEventTouchUpInside];
    [backV addSubview:nextBtn];
    
    
}


- (void)changeAction:(UIButton *)sender{
    sender.selected = !sender.selected;
}

- (void)nextAction{
    if (sureB.selected) {
        [[UIHelper sharedSingleton] pushVC:@"S_typeViewController" vc:self parames:nil];
    }else{
        [self showError:@"请勾选我已阅读以上条款"];
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
