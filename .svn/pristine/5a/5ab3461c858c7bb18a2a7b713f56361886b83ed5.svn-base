//
//  RootNavigationController.m
//  TTMN
//
//  Created by macmini on 2018/3/28.
//  Copyright © 2018年 lixin. All rights reserved.
//

#import "RootNavigationController.h"



@interface RootNavigationController ()<UINavigationControllerDelegate,UIGestureRecognizerDelegate>

@end

@implementation RootNavigationController
- (void)viewDidLoad
{
    [super viewDidLoad];
 
}

- (void)viewWillAppear:(BOOL)animated {
    [super viewWillAppear:animated];
//    [self.navigationBar setBackgroundColor:[UIColor whiteColor]];
    [self.navigationBar setBackgroundImage:[UIImage imageNamed:@"bg_nav"] forBarMetrics:UIBarMetricsDefault];
//    [self.navigationBar setShadowImage:[UIImage new]];
    [self.navigationBar setTitleTextAttributes:@{NSForegroundColorAttributeName:[UIColor whiteColor],NSFontAttributeName:[UIFont boldSystemFontOfSize:18]}];
    
}


- (void)pushViewController:(UIViewController *)viewController animated:(BOOL)animated
{
    if (self.viewControllers.count > 0) {
        viewController.hidesBottomBarWhenPushed = YES;
    }
    [super pushViewController:viewController animated:animated];
}

- (void)dealloc
{
    NSLog(@"---%@--我是导航控制器，我已经死了",self.topViewController);
}



@end
