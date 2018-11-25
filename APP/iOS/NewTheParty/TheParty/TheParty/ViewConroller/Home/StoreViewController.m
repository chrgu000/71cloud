//
//  StoreViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/30.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "StoreViewController.h"

@interface StoreViewController ()

@end

@implementation StoreViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"党建应用商店";
    self.view.backgroundColor = [UIColor whiteColor];
    [self createUI];
}

- (void)createUI{
    
    UIImageView *logoV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W/2 -80, 100, 24, 24)];
    logoV.image = [UIImage imageNamed:@"store"];
    [self.view addSubview:logoV];
    
    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(CGRectGetMaxX(logoV.frame) + 16, 108, 180, 24)];
    titleL.text = @"党建应用商店";
    titleL.textColor = COLOR(51, 51, 51);
    titleL.font = Font(17);
    [self.view addSubview:titleL];
    
    UILabel *subjectL = [[UILabel alloc] initWithFrame:CGRectMake(29, CGRectGetMaxY(titleL.frame) + 35 +17, SCREEN_W -58, 40)];
    subjectL.text = @"       您当前的设备不支持直接跳转到党建云小程序商店，请下载微信(wechat)后使用；";
    subjectL.textColor = COLOR(102, 102, 102);
    subjectL.font = Font(16);
    subjectL.numberOfLines = 2;
    [self.view addSubview:subjectL];
    
    UILabel *subjectSecondL = [[UILabel alloc] initWithFrame:CGRectMake(29, CGRectGetMaxY(subjectL.frame) + 25, SCREEN_W -58, 40)];
    subjectSecondL.text = @"       您也可以使用其他设备直接扫描以下二维码，进行使用。";
    subjectSecondL.textColor = COLOR(102, 102, 102);
    subjectSecondL.font = Font(16);
    subjectSecondL.numberOfLines = 2;
    [self.view addSubview:subjectSecondL];
    
    
    UIImageView *erweimaV = [[UIImageView alloc] initWithFrame:CGRectMake((SCREEN_W-124)/2 , CGRectGetMaxY(subjectSecondL.frame) + 60, 124, 124)];
    erweimaV.image = [UIImage imageNamed:@"erweima"];
    [self.view addSubview:erweimaV];
    
    
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
