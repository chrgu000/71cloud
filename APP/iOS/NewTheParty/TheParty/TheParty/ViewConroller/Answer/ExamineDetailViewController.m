//
//  ExamineDetailViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/25.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExamineDetailViewController.h"

@interface ExamineDetailViewController ()

@end

@implementation ExamineDetailViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"答题";
    self.view.backgroundColor = [UIColor whiteColor];
    [self createUI];
    
}

- (void)createUI{
    
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
