//
//  UIView+Utilities.m
//  CiYunKang
//
//  Created by Wen on 2017/5/3.
//  Copyright © 2017年 Wen. All rights reserved.
//

#import "UIView+Utilities.h"

@implementation UIView (Utilities)

/**
 移除子Views
 */
-(void)removeAllSubviews{
    NSArray *subViews=self.subviews;
    for(UIView *subView in subViews){
        [subView removeFromSuperview];
    }
}

/**
 添加边框
 
 @param radius 半径
 @param color 边框颜色
 @param width 边框宽度
 */
-(void)addViewBorder:(CGFloat)radius borderColor:(CGColorRef )color borderWidth:(CGFloat)width{
    self.layer.cornerRadius=radius;
    self.layer.borderColor=color;
    self.layer.borderWidth=width;
    self.layer.masksToBounds=YES;
}

/**
 添加阴影
 
 @param offset 偏移量
 @param radius 阴影半径
 @param color 阴影颜色
 @param opacity 透明度
 */
- (void)dropShadowWithOffset:(CGSize)offset
                      radius:(CGFloat)radius
                       color:(UIColor *)color
                     opacity:(CGFloat)opacity{
    //1.设置阴影颜色
    self.layer.shadowColor = color.CGColor;
    //2.设置阴影偏移范围
    self.layer.shadowOffset = offset;
    //3.设置阴影颜色的透明度
    self.layer.shadowOpacity = opacity;
    //4.设置阴影半径
    self.layer.shadowRadius = radius;
    self.layer.cornerRadius = radius;
    //5.设置阴影路径
//    self.layer.shadowPath = [UIBezierPath bezierPathWithRect:self.bounds].CGPath;
    self.clipsToBounds = NO;
}


@end
