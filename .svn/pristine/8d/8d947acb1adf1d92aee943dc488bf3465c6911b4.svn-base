//
//  UIViewController+Utilities.m
//  DataCollection
//
//  Created by yuanshenwen on 14/12/3.
//  Copyright (c) 2014年 yuanshenwen. All rights reserved.
//

#import "UIViewController+Utilities.h"

@implementation UIViewController (Utilities)

-(void)setNav
{
    self.navigationController.navigationBar.translucent=NO;
    [[UIApplication sharedApplication] setStatusBarStyle:UIStatusBarStyleLightContent animated:NO];//将状态栏的字体改为白色
    self.automaticallyAdjustsScrollViewInsets=NO;//scrollView不留白
    if ([self.navigationController respondsToSelector:@selector(interactivePopGestureRecognizer)]) {
        self.navigationController.interactivePopGestureRecognizer.enabled = NO;
    }
}

//-(void)setBackBtn
//{
//    if(self.navigationController.viewControllers[0]!=self)
//    {
//        UIButton *btn=[UIButton buttonWithType:UIButtonTypeCustom];
//        btn.frame=CGRectMake(0.0, 0.0, 40.0, 44.0);
//        [btn addTarget:self action:@selector(popself) forControlEvents:UIControlEventTouchUpInside];
//        [btn setImage:[UIImage imageNamed:@"barbuttonicon_back"] forState:UIControlStateNormal];
//        
//        UIView *leftView=[[UIView alloc] initWithFrame:CGRectMake(0, 0, 40, 44.0)];
//        leftView.backgroundColor=[UIColor clearColor];
//        [leftView addSubview:btn];
//        UIBarButtonItem *leftBtn=[[UIBarButtonItem alloc] initWithCustomView:leftView];
//        self.navigationItem.leftBarButtonItem=leftBtn;
//    }
//}

-(void)setBackBtn
{
    if(self.navigationController.viewControllers[0]!=self)
    {
        UIButton *btn=[UIButton buttonWithType:UIButtonTypeCustom];
        btn.frame = CGRectMake(0.0, 0.0, 42.0, 44.0);
        [btn addTarget:self action:@selector(popself) forControlEvents:UIControlEventTouchUpInside];
        [btn setImage:[UIImage imageNamed:@"ic_back"] forState:UIControlStateNormal];
        
        UIView *leftView=[[UIView alloc] initWithFrame:CGRectMake(0, 0, 42, 44.0)];
        leftView.backgroundColor=[UIColor clearColor];
        [leftView addSubview:btn];
        UIBarButtonItem *leftBtn=[[UIBarButtonItem alloc] initWithCustomView:leftView];
        
        if(kSystemVersionMoreThan11){
            btn.imageView.contentMode = UIViewContentModeScaleAspectFit;
            btn.contentHorizontalAlignment = UIControlContentHorizontalAlignmentLeft;
            self.navigationItem.leftBarButtonItem = leftBtn;
        }
        else{
            UIBarButtonItem *nagetiveSpacer = [[UIBarButtonItem alloc]initWithBarButtonSystemItem:UIBarButtonSystemItemFixedSpace target:nil action:nil];
            nagetiveSpacer.width = -13;//这个值可以根据自己需要自己调整
            self.navigationItem.leftBarButtonItems = @[nagetiveSpacer, leftBtn];
        }
    }
}

-(void)setLeftBtn:(NSString *)imagename sel:(SEL)sel
{
    UIButton *btn=[UIButton buttonWithType:UIButtonTypeCustom];
    btn.frame=CGRectMake(0.0, 0.0, 42.0, 44.0);
    [btn addTarget:self action:sel forControlEvents:UIControlEventTouchUpInside];
    [btn setImage:[UIImage imageNamed:imagename] forState:UIControlStateNormal];
    
    UIView *leftView=[[UIView alloc] initWithFrame:CGRectMake(0, 0, 42, 44.0)];
    leftView.backgroundColor=[UIColor clearColor];
    [leftView addSubview:btn];
    UIBarButtonItem *leftBtn=[[UIBarButtonItem alloc] initWithCustomView:leftView];
    
    if(kSystemVersionMoreThan11){
        btn.imageView.contentMode = UIViewContentModeScaleAspectFit;
        btn.contentHorizontalAlignment = UIControlContentHorizontalAlignmentLeft;
        self.navigationItem.leftBarButtonItem = leftBtn;
    }
    else{
        UIBarButtonItem *nagetiveSpacer = [[UIBarButtonItem alloc]initWithBarButtonSystemItem:UIBarButtonSystemItemFixedSpace target:nil action:nil];
        nagetiveSpacer.width = -13;//这个值可以根据自己需要自己调整
        self.navigationItem.leftBarButtonItems = @[nagetiveSpacer, leftBtn];
    }
}

-(void)setLeftBtnText:(NSString *)name sel:(SEL)sel
{
    UIButton *btn=[UIButton buttonWithType:UIButtonTypeCustom];
    btn.frame=CGRectMake(0.0, 0.0, 75.0, 50.0);
    [btn setContentHorizontalAlignment:UIControlContentHorizontalAlignmentRight];
    [btn setTitle:name forState:UIControlStateNormal];
    btn.titleLabel.font=Font(15);
    [btn setTitleColor:COLOR(129, 116, 255) forState:UIControlStateNormal];
    [btn setTitleColor:COLORA(129, 116, 255, 0.3) forState:UIControlStateHighlighted];
    [btn addTarget:self action:sel forControlEvents:UIControlEventTouchUpInside];
    UIBarButtonItem *leftBtn=[[UIBarButtonItem alloc] initWithCustomView:btn];
    self.navigationItem.rightBarButtonItem=leftBtn;
}

-(void)setLeftEmpty{
    self.navigationItem.leftBarButtonItem=nil;
}

-(void)popself
{
    if (self.navigationController.viewControllers[0] == self)
    {
        
        [self.navigationController dismissViewControllerAnimated:YES completion:nil];
    }
    else
    {
        [self.navigationController popViewControllerAnimated:YES];
    }
}

-(void)setRightBtn:(NSString *)imagename sel:(SEL)sel
{
    UIButton *btn=[UIButton buttonWithType:UIButtonTypeCustom];
    btn.frame=CGRectMake(0.0, 0.0, 30.0, 30.0);
    [btn addTarget:self action:sel forControlEvents:UIControlEventTouchUpInside];
    [btn setImage:[UIImage imageNamed:imagename] forState:UIControlStateNormal];
    UIBarButtonItem *leftBtn=[[UIBarButtonItem alloc] initWithCustomView:btn];
    
    UIBarButtonItem *nagetiveSpacer = [[UIBarButtonItem alloc]initWithBarButtonSystemItem:UIBarButtonSystemItemFixedSpace target:nil action:nil];
    nagetiveSpacer.width = -5;//这个值可以根据自己需要自己调整
    self.navigationItem.rightBarButtonItems=@[nagetiveSpacer,leftBtn];
}

-(void)setRightBtnText:(NSString *)name sel:(SEL)sel
{
    UIButton *btn=[UIButton buttonWithType:UIButtonTypeCustom];
    btn.frame=CGRectMake(0.0, 0.0, 75.0, 50.0);
    [btn setContentHorizontalAlignment:UIControlContentHorizontalAlignmentRight];
    [btn setTitle:name forState:UIControlStateNormal];
    btn.titleLabel.font=Font(15);
    [btn setTitleColor:COLOR(255, 122, 207) forState:UIControlStateNormal];
    [btn setTitleColor:COLORA(255, 122, 207, 0.3) forState:UIControlStateHighlighted];
    [btn addTarget:self action:sel forControlEvents:UIControlEventTouchUpInside];
    UIBarButtonItem *leftBtn=[[UIBarButtonItem alloc] initWithCustomView:btn];
    self.navigationItem.rightBarButtonItem=leftBtn;
}

-(void)setCustomTitle:(NSString *)title
{
    [self setCustomTitle:title color:[UIColor blackColor]];
}

-(void)setCustomTitle:(NSString *)title color:(UIColor *)color
{
//    UILabel *titleLable=[[UILabel alloc] initWithFrame:CGRectZero];
//    titleLable.backgroundColor=[UIColor clearColor];
//    titleLable.textColor=color;
//    titleLable.textAlignment=NSTextAlignmentCenter;
//    titleLable.font=Font(18);
//    titleLable.text=title;
//    [titleLable sizeToFit];
//    self.navigationItem.titleView=titleLable;
    self.title=title;
    [self.navigationController.navigationBar setTitleTextAttributes:
  @{NSFontAttributeName:[UIFont systemFontOfSize:18],
    NSForegroundColorAttributeName:color}];
}
@end
