//
//  S_complantViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/6.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "S_complantViewController.h"

@interface S_complantViewController ()

@end

@implementation S_complantViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.title = @"完成";
    
     self.navigationItem.leftBarButtonItem = [[UIBarButtonItem alloc] initWithImage:[[UIImage imageNamed:@"back"] imageWithRenderingMode:UIImageRenderingModeAlwaysOriginal] style:UIBarButtonItemStylePlain target:self action:@selector(back_action)];
    
    UIImageView *backImageV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H - 64)];
    backImageV.image = [UIImage imageNamed:@"jubao_ok"];
    [self.view addSubview:backImageV];
}


- (void)back_action{
    [self.navigationController popToRootViewControllerAnimated:YES];
    
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
