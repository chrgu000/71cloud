//
//  PersonalInformationViewController.m
//  TongMengWuYou
//
//  Created by tm51 on 2017/8/25.
//  Copyright © 2017年 鑫 李. All rights reserved.
//

#import "CustomAlertView.h"
@interface CustomAlertView ()<UITextFieldDelegate>
{
    UITextField *nameTet;
}
@end

#define AlertViewJianGe 19.5
#define SCREEN_WIDTH [UIScreen mainScreen].bounds.size.width            // 屏幕宽
#define SCREEN_HEIGHT [UIScreen mainScreen].bounds.size.height          // 屏幕高
#define SCREEN_PRESENT [[UIScreen mainScreen] bounds].size.width/375.0  // 屏幕宽高比例
#define DarkGrayColor [UIColor colorWithRGB:0x333333]     // 深灰色
#define WhiteColor  [UIColor whiteColor]                  // 白色
#define LightGrayColor [UIColor colorWithRGB:0x999999]    // 浅灰色

#define cornerRadiusView(View, Radius) \
\
[View.layer setCornerRadius:(Radius)];           \
[View.layer setMasksToBounds:YES]

#define Color(r, g, b) [UIColor colorWithRed:(r)/255.0 green:(g)/255.0 blue:(b)/255.0 alpha:1.0]
#define ColorAlphe(r, g, b, a) [UIColor colorWithRed:(r)/255.0 green:(g)/255.0 blue:(b)/255.0 alpha:a]
// 随机色
#define RandomColor Color(arc4random_uniform(256), arc4random_uniform(256), arc4random_uniform(256))

@implementation CustomAlertView

-(instancetype)initWithAlertViewHeight:(CGFloat)height
{
    self=[super init];
    if (self) {
        if (self.bGView==nil) {
            UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_WIDTH,SCREEN_HEIGHT)];
            view.backgroundColor = [UIColor blackColor];
            view.alpha = 0.5;
       
            [[UIApplication sharedApplication].keyWindow addSubview:view];
            self.bGView =view;
            
            UITapGestureRecognizer *tap = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(BackAction)];
            [self.bGView addGestureRecognizer:tap];
        }
        
        self.frame = CGRectMake((SCREEN_W - 315)/2,(SCREEN_H -115)/2,315,115);
        [[UIApplication sharedApplication].keyWindow addSubview:self];

        //中间弹框的view
        UIView *popView = [[UIView alloc] initWithFrame:CGRectMake(0,0,315,115)];
        popView.backgroundColor = [UIColor whiteColor];
        cornerRadiusView(popView, 8);
        [self addSubview:popView];
        
        UILabel *titileLabel = [[UILabel alloc] initWithFrame:CGRectMake(30, 20, 100, 18)];
        titileLabel.text = @"上传方式";
        titileLabel.textColor = UIColorFromRGBA(0x888888, 1);
        titileLabel.font = [UIFont boldSystemFontOfSize:17];
        [popView addSubview:titileLabel];
        
        UIButton *creamB = [UIButton buttonWithType:UIButtonTypeCustom];
        creamB.tag = 100;
        creamB.frame = CGRectMake(315-120, 80, 40, 20);
        [creamB setTitle:@"拍照" forState:UIControlStateNormal];
        [creamB setTitleColor:UIColorFromRGBA(0x484848, 1) forState:UIControlStateNormal];
        [creamB addTarget:self action:@selector(buttonClick:) forControlEvents:UIControlEventTouchUpInside];
        creamB.titleLabel.font = [UIFont systemFontOfSize:15];
        [popView addSubview:creamB];
        
        UIButton *PhotoB = [UIButton buttonWithType:UIButtonTypeCustom];
        PhotoB.tag = 101;
        PhotoB.frame = CGRectMake(315-60, 80, 40, 20);
        [PhotoB setTitle:@"相册" forState:UIControlStateNormal];
        [PhotoB setTitleColor:UIColorFromRGBA(0xea76b7, 1) forState:UIControlStateNormal];
        [PhotoB addTarget:self action:@selector(buttonClick:) forControlEvents:UIControlEventTouchUpInside];
        PhotoB.titleLabel.font = [UIFont systemFontOfSize:15];
        [popView addSubview:PhotoB];
        
        [self show:YES];

    }
    return self;
}

//-(instancetype)initWithThiredViewHeight:(CGFloat)height andindex:(int)index{
//    self=[super init];
//    if (self) {
//        if (self.bGView==nil) {
//            UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_WIDTH,SCREEN_HEIGHT)];
//            view.backgroundColor = [UIColor blackColor];
//            view.alpha = 0.5;
//
//            [[UIApplication sharedApplication].keyWindow addSubview:view];
//            self.bGView =view;
//
//            UITapGestureRecognizer *tap = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(BackAction)];
//            [self.bGView addGestureRecognizer:tap];
//        }
//
//        self.frame = CGRectMake((SCREEN_W - 315)/2,(SCREEN_H -115)/2,315,181);
//        [[UIApplication sharedApplication].keyWindow addSubview:self];
//
//        //中间弹框的view
//        UIView *popView = [[UIView alloc] initWithFrame:CGRectMake(0,0,315,181)];
//        popView.backgroundColor = [UIColor whiteColor];
//        cornerRadiusView(popView, 8);
//        [self addSubview:popView];
//
//
//        UIImageView *meetImage =[[UIImageView alloc] initWithFrame:CGRectMake(265/2, 20,50 , 50)];
//        if (index == 400) {
//            meetImage.image = [UIImage imageNamed:@"ziliao-qq"];
//        }else if(index == 500){
//            meetImage.image = [UIImage imageNamed:@"ziliao-weix"];
//        }else if(index == 600){
//            meetImage.image = [UIImage imageNamed:@"ziliao-weibo"];
//        }else if(index == 700){
//            meetImage.image = [UIImage imageNamed:@"ziliao-zhifub"];
//        }
//        [popView addSubview:meetImage];
//
//
//
//        UILabel *titileLabel = [[UILabel alloc] initWithFrame:CGRectMake(0, CGRectGetMaxY(meetImage.frame) + 10, 315, 18)];
//        titileLabel.text = @"解绑当前社交账户？";
//        titileLabel.textAlignment = 1;
//        titileLabel.textColor = UIColorFromRGBA(0xea76b7, 1)(0x888888);
//        titileLabel.font = [UIFont boldSystemFontOfSize:17];
//        [popView addSubview:titileLabel];
//
//        UILabel *topline = [[UILabel alloc] initWithFrame:CGRectMake(0, 136, 315, 1)];
//        topline.backgroundColor = DEF_COLOR(0xc5c3c3);
//        [popView addSubview:topline];
//
//        UILabel *line = [[UILabel alloc] initWithFrame:CGRectMake(315/2, 137, 1, 44)];
//        line.backgroundColor = DEF_COLOR(0xc5c3c3);
//        [popView addSubview:line];
//
//        UIButton *creamB = [UIButton buttonWithType:UIButtonTypeCustom];
//        creamB.frame = CGRectMake(0, 137, 315/2, 44);
//        [creamB setTitle:@"取消" forState:UIControlStateNormal];
//        [creamB setTitleColor:DEF_COLOR(0x484848) forState:UIControlStateNormal];
//        [creamB addTarget:self action:@selector(buttonClick:) forControlEvents:UIControlEventTouchUpInside];
//        creamB.titleLabel.font = [UIFont systemFontOfSize:15];
//        [popView addSubview:creamB];
//
//        UIButton *PhotoB = [UIButton buttonWithType:UIButtonTypeCustom];
//        PhotoB.tag = index;
//        PhotoB.frame = CGRectMake(315/2,137, 315/2, 44);
//        [PhotoB setTitle:@"确定" forState:UIControlStateNormal];
//        [PhotoB setTitleColor:DEF_COLOR(0xea76b7) forState:UIControlStateNormal];
//        [PhotoB addTarget:self action:@selector(buttonClick:) forControlEvents:UIControlEventTouchUpInside];
//        PhotoB.titleLabel.font = [UIFont systemFontOfSize:15];
//        [popView addSubview:PhotoB];
//
//
//        [self show:YES];
//
//    }
//    return self;
//
//}


-(instancetype)initWithNameViewHeight:(CGFloat)height andstr:(NSString *)str{
    self=[super init];
    if (self) {
        if (self.bGView==nil) {
            UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_WIDTH,SCREEN_HEIGHT)];
            view.backgroundColor = [UIColor blackColor];
            view.alpha = 0.5;
            
            [[UIApplication sharedApplication].keyWindow addSubview:view];
            self.bGView =view;
            
            UITapGestureRecognizer *tap = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(BackAction)];
            [self.bGView addGestureRecognizer:tap];
        }
        
        self.frame = CGRectMake((SCREEN_W - 315)/2,(SCREEN_H -115)/2,315,128);
        [[UIApplication sharedApplication].keyWindow addSubview:self];
        
        //中间弹框的view
        UIView *popView = [[UIView alloc] initWithFrame:CGRectMake(0,0,315,128)];
        popView.backgroundColor = [UIColor whiteColor];
        cornerRadiusView(popView, 8);
        [self addSubview:popView];
        
        UILabel *titileLabel = [[UILabel alloc] initWithFrame:CGRectMake(30, 20, 100, 18)];
        titileLabel.text = str;
        titileLabel.textColor = UIColorFromRGBA(0x888888, 1);
        titileLabel.font = [UIFont boldSystemFontOfSize:17];
        [popView addSubview:titileLabel];
        
        
        nameTet = [[UITextField alloc] initWithFrame:CGRectMake(30, 55, 315-60, 20)];
        nameTet.font = [UIFont systemFontOfSize:14];
        nameTet.delegate = self;
        [popView addSubview:nameTet];
        
        UILabel *line = [[UILabel alloc] initWithFrame:CGRectMake(30, 80, 315 -60, 1)];
        line.backgroundColor =  UIColorFromRGBA(0xc5c3c3, 1);
        [popView addSubview:line];
        
        
        UIButton *creamB = [UIButton buttonWithType:UIButtonTypeCustom];
        creamB.tag = 200;
        creamB.frame = CGRectMake(315-120, 95, 40, 20);
        [creamB setTitle:@"取消" forState:UIControlStateNormal];
        [creamB setTitleColor:UIColorFromRGBA(0x484848, 1) forState:UIControlStateNormal];
        [creamB addTarget:self action:@selector(buttonClick:) forControlEvents:UIControlEventTouchUpInside];
        creamB.titleLabel.font = [UIFont systemFontOfSize:15];
        [popView addSubview:creamB];
        
        UIButton *PhotoB = [UIButton buttonWithType:UIButtonTypeCustom];
        PhotoB.tag = 201;
        PhotoB.frame = CGRectMake(315-60, 95, 40, 20);
        [PhotoB setTitle:@"确认" forState:UIControlStateNormal];
        [PhotoB setTitleColor:[UIColor redColor] forState:UIControlStateNormal];
        [PhotoB addTarget:self action:@selector(buttonClick:) forControlEvents:UIControlEventTouchUpInside];
        PhotoB.titleLabel.font = [UIFont systemFontOfSize:15];
        [popView addSubview:PhotoB];
        
        [self show:YES];
        
    }
    return self;

}

//-(instancetype)initWithPhoneViewHeight:(CGFloat)height{
//    self=[super init];
//    if (self) {
//        if (self.bGView==nil) {
//            UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_WIDTH,SCREEN_HEIGHT)];
//            view.backgroundColor = [UIColor blackColor];
//            view.alpha = 0.5;
//            
//            [[UIApplication sharedApplication].keyWindow addSubview:view];
//            self.bGView =view;
//            
//            UITapGestureRecognizer *tap = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(BackAction)];
//            [self.bGView addGestureRecognizer:tap];
//        }
//        
//        self.frame = CGRectMake((SCREEN_W - 135)/2,(SCREEN_H -115)/2,135,91);
//        [[UIApplication sharedApplication].keyWindow addSubview:self];
//        
//        //中间弹框的view
//        UIView *popView = [[UIView alloc] initWithFrame:CGRectMake(0,0,135,91)];
//        popView.backgroundColor = [UIColor whiteColor];
//        cornerRadiusView(popView, 8);
//        [self addSubview:popView];
//        
//        UILabel *line = [[UILabel alloc] initWithFrame:CGRectMake(0, 45, 135, 1)];
//        line.backgroundColor = DEF_COLOR(0xc5c3c3);
//        [popView addSubview:line];
//        
//        
//        UIButton *creamB = [UIButton buttonWithType:UIButtonTypeCustom];
//        creamB.tag = 300;
//        creamB.frame = CGRectMake(0, 0, 135, 45);
//        [creamB addTarget:self action:@selector(buttonClick:) forControlEvents:UIControlEventTouchUpInside];
//        [popView addSubview:creamB];
//        
//        UILabel *Bphoto = [[UILabel alloc] initWithFrame:CGRectMake(15, 0, 100, 45)];
//        Bphoto.textColor = DEF_COLOR(0x484848);
//        Bphoto.text = @"绑定手机";
//        Bphoto.font = [UIFont systemFontOfSize:15];
//        [creamB addSubview:Bphoto];
//        
//        
//        UIButton *PhotoB = [UIButton buttonWithType:UIButtonTypeCustom];
//        PhotoB.tag = 301;
//        PhotoB.frame = CGRectMake(0, 46, 135, 45);
//        [PhotoB addTarget:self action:@selector(buttonClick:) forControlEvents:UIControlEventTouchUpInside];
//        PhotoB.titleLabel.font = [UIFont systemFontOfSize:15];
//        [popView addSubview:PhotoB];
//        
//        UILabel *Jphoto = [[UILabel alloc] initWithFrame:CGRectMake(15, 0, 100, 45)];
//        Jphoto.textColor = DEF_COLOR(0x484848);
//        Jphoto.text = @"解绑手机";
//        Jphoto.font = [UIFont systemFontOfSize:15];
//        [PhotoB addSubview:Jphoto];
//        [self show:YES];
//        
//    }
//    return self;
//}


- (void)BackAction{
    BOOL animated = YES;
    [self endEditing:YES];
    if (self.bGView != nil) {
        __weak CustomAlertView *weakSelf = self;
        
        [UIView animateWithDuration:animated ?0.3: 0 animations:^{
            weakSelf.transform = CGAffineTransformScale(weakSelf.transform,1,1);
            
        } completion:^(BOOL finished) {
            [UIView animateWithDuration: animated ?0.3: 0 animations:^{
                weakSelf.transform = CGAffineTransformScale(weakSelf.transform,0.2,0.2);
            } completion:^(BOOL finished) {
                [weakSelf.bGView removeFromSuperview];
                [weakSelf removeFromSuperview];
                weakSelf.bGView=nil;
            }];
        }];
    }


}

-(void)buttonClick:(UIButton*)button
{
    [self hide:YES];
    if (button.tag == 201) {
        if (self.NameButtonClick) {
            self.NameButtonClick(nameTet.text);
        }
    }else{
    if (self.ButtonClick) {
        self.ButtonClick(button);
    }
    }
}
- (void)show:(BOOL)animated
{
    if (animated)
    {
        self.transform = CGAffineTransformScale(self.transform,0,0);
        __weak CustomAlertView *weakSelf = self;
        [UIView animateWithDuration:.3 animations:^{
            weakSelf.transform = CGAffineTransformScale(weakSelf.transform,1.2,1.2);
        } completion:^(BOOL finished) {
            [UIView animateWithDuration:.3 animations:^{
                weakSelf.transform = CGAffineTransformIdentity;
            }];
        }];
    }
}

- (void)hide:(BOOL)animated
{
    [self endEditing:YES];
    if (self.bGView != nil) {
        __weak CustomAlertView *weakSelf = self;
        
        [UIView animateWithDuration:animated ?0.3: 0 animations:^{
            weakSelf.transform = CGAffineTransformScale(weakSelf.transform,1,1);
            
        } completion:^(BOOL finished) {
            [UIView animateWithDuration: animated ?0.3: 0 animations:^{
                weakSelf.transform = CGAffineTransformScale(weakSelf.transform,0.2,0.2);
            } completion:^(BOOL finished) {
                [weakSelf.bGView removeFromSuperview];
                [weakSelf removeFromSuperview];
                weakSelf.bGView=nil;
            }];
        }];
    }
    
}

@end
