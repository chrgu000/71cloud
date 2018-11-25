//
//  UIView+YYAdd.h
//  模块化
//
//  Created by macmini on 2017/11/28.
//  Copyright © 2017年 lixin. All rights reserved.
//

#import <UIKit/UIKit.h>

/**
 Provides extensions for `UIView`.
 */
@interface UIView (YYAdd)

@property (nonatomic) CGFloat left;        ///< Shortcut for frame.origin.x.
@property (nonatomic) CGFloat top;         ///< Shortcut for frame.origin.y
@property (nonatomic) CGFloat right;       ///< Shortcut for frame.origin.x + frame.size.width
@property (nonatomic) CGFloat bottom;      ///< Shortcut for frame.origin.y + frame.size.height
@property (nonatomic) CGFloat width;       ///< Shortcut for frame.size.width.
@property (nonatomic) CGFloat height;      ///< Shortcut for frame.size.height.
@property (nonatomic) CGFloat centerX;     ///< Shortcut for center.x
@property (nonatomic) CGFloat centerY;     ///< Shortcut for center.y
@property (nonatomic) CGPoint origin;      ///< Shortcut for frame.origin.
@property (nonatomic) CGSize  size;        ///< Shortcut for frame.size.

/**
 *  CGAffineTransformMakeScale
 */
@property (nonatomic) CGFloat  scale;

/**
 *  CGAffineTransformMakeRotation
 */
@property (nonatomic) CGFloat  angle;




///
- (void)addCornerRadius:(CGFloat)radius rectCorner:(UIRectCorner)corner;

+ (UIView *)getSnapshotViewWith:(UIView *)view;


@end
