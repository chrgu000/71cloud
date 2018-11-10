//
//  ExaminePrepareViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/25.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExaminePrepareViewController.h"
#import "ExamineDetailViewController.h"
@interface ExaminePrepareViewController ()

@end

@implementation ExaminePrepareViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.title = @"答题引导";
    self.view.backgroundColor = [UIColor whiteColor];
    [self createUI];
    
}

- (void)createUI{
    
    UIImageView *imageV = [[UIImageView alloc] initWithFrame:CGRectMake((SCREEN_W-121)/2, 66, 121, 112)];
    imageV.image = [UIImage imageNamed:@"prepare_icon"];
    [self.view addSubview:imageV];
    
    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(0, CGRectGetMaxY(imageV.frame) + 29, SCREEN_W, 16)];
    titleL.text = @"第一关：学党章";
    titleL.textColor = COLOR(51, 51, 51);
    titleL.font = FontBold(16);
    titleL.textAlignment = 1;
    [self.view addSubview:titleL];
    
    UILabel *subject = [[UILabel alloc] initWithFrame:CGRectMake(16.5, CGRectGetMaxY(titleL.frame) + 15, SCREEN_W - 33, 40)];
    subject.text = @"    本关卡共30道题，总分100分，80分可以进入下一关。";
    subject.textColor = COLOR(51, 51, 51);
    subject.font = Font(15);
    subject.numberOfLines = 2;
    [self.view addSubview:subject];
    
    UIButton *sureB = [UIButton buttonWithType:UIButtonTypeCustom];
    sureB.frame = CGRectMake(57.5, CGRectGetMaxY(subject.frame) + 100, SCREEN_W - 2*57.5, 34);
    [sureB setBackgroundImage:[UIImage imageNamed:@"prepare_button"] forState:UIControlStateNormal];
    [sureB setTitle:@"开始答题" forState:UIControlStateNormal];
    [sureB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    sureB.titleLabel.font = FontBold(14);
    [sureB addTarget:self action:@selector(actionNext) forControlEvents:UIControlEventTouchUpInside];
    [self.view addSubview:sureB];
    
}

- (void)actionNext{
    NSLog(@"next");
    [[UIHelper sharedSingleton] pushVC:@"ExamineDetailViewController" vc:self parames:nil];
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
