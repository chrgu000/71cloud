//
//  UIView+Utilities.h
//  CiYunKang
//
//  Created by Wen on 2017/5/3.
//  Copyright © 2017年 Wen. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface UIView (Utilities)

/**
 移除子Views
 */
-(void)removeAllSubviews;

/**
 添加边框
 
 @param radius 半径
 @param color 边框颜色
 @param width 边框宽度
 */
-(void)addViewBorder:(CGFloat)radius borderColor:(CGColorRef )color borderWidth:(CGFloat)width;

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
                     opacity:(CGFloat)opacity;
@end
