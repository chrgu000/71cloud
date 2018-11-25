//
//  LXMainTabBarController.m
//  TTMN
//
//  Created by macmini on 2018/3/28.
//  Copyright © 2018年 lixin. All rights reserved.
//

#import "LXMainTabBarController.h"
#import "XDX_MeViewController.h"
#import "XDX_ClassViewController.h"
#import "XDX_PartySchoolViewController.h"
@interface LXMainTabBarController ()

@end

@implementation LXMainTabBarController

- (void)viewDidLoad {
    [super viewDidLoad];
    [self setupTabBarViewController];
    self.tabBarController.view.backgroundColor = [UIColor whiteColor];
    self.tabBarController.tabBar.translucent = YES;
}

- (void)setupTabBarViewController{
    [self addChildVc:[[XDX_PartySchoolViewController alloc] init] title:@"党校" image:@"wdx_school_n" selectedImage:@"wdx_school_s"];
    [self addChildVc:[[XDX_ClassViewController alloc] init] title:@"选课" image:@"wdx_class_n" selectedImage:@"wdx_class_s"];
    [self addChildVc:[[XDX_MeViewController alloc] init] title:@"我的" image:@"wdx_me_n" selectedImage:@"wdx_me_s"];


}

- (void)addChildVc:(UIViewController *)childVc title:(NSString *)title image:(NSString *)image selectedImage:(NSString *)selectedImage
{
    childVc.title = title;
    
    childVc.tabBarItem.image = [[UIImage imageNamed:image] imageWithRenderingMode:UIImageRenderingModeAlwaysOriginal];
    
    childVc.tabBarItem.selectedImage = [[UIImage imageNamed:selectedImage] imageWithRenderingMode:UIImageRenderingModeAlwaysOriginal];
    
    [childVc.tabBarItem setTitleTextAttributes:@{NSForegroundColorAttributeName : [UIColor blackColor],NSFontAttributeName:Font(12)} forState:UIControlStateNormal];
    [childVc.tabBarItem setTitleTextAttributes:@{NSForegroundColorAttributeName :[UIColor redColor],NSFontAttributeName:Font(12)} forState:UIControlStateSelected];
    
    RootNavigationController *navigationVc = [[RootNavigationController alloc] initWithRootViewController:childVc];
    [self addChildViewController:navigationVc];
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
