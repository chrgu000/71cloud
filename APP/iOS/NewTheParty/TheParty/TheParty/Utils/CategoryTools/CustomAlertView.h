//
//  PersonalInformationViewController.m
//  TongMengWuYou
//
//  Created by tm51 on 2017/8/25.
//  Copyright © 2017年 鑫 李. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface CustomAlertView : UIView

@property(nonatomic,strong)UIView *bGView;

@property(copy,nonatomic)void (^ButtonClick)(UIButton*);

@property(copy,nonatomic)void (^NameButtonClick)(NSString*);

// 第三方
-(instancetype)initWithThiredViewHeight:(CGFloat)height andindex:(int)index;
// 绑定手机
-(instancetype)initWithPhoneViewHeight:(CGFloat)height;
// 拍照
-(instancetype)initWithAlertViewHeight:(CGFloat)height;
// 名称
-(instancetype)initWithNameViewHeight:(CGFloat)height andstr:(NSString *)str;

- (void)show:(BOOL)animated;

- (void)hide:(BOOL)animated;

@end
