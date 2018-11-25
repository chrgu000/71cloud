//
//  UINavigationController+Utilities.m
//  HuichebaoforShop
//
//  Created by yuanshenwen on 15/2/27.
//  Copyright (c) 2015年 yuanshenwen. All rights reserved.
//

#import "UINavigationController+Utilities.h"

@implementation UINavigationController (Utilities)

-(void)setBgImageName:(NSString *)name
{
    UIImage *image=[UIImage imageNamed:name];
    image=[image resizableImageWithCapInsets:UIEdgeInsetsMake(5, 1, 40, 4) resizingMode:UIImageResizingModeStretch];
    [self.navigationBar setBackgroundImage:image forBarPosition:UIBarPositionAny barMetrics:UIBarMetricsDefault];
    [self.navigationBar setShadowImage:[self createImageWithColor:UIColorFromRGBA(0xe5e5e5,1)]];
}

-(void)setBgImageName
{
    [self setBgImageName:@"navbar"];
}

-(void)setOrignBgImage{
    UIImage *image=nil;
    if(SCREEN_W==320){
        image=[UIImage imageNamed:@""];
    }
    else if(SCREEN_W==375){
         image=[UIImage imageNamed:@""];
    }
    else if(SCREEN_W==414){
         image=[UIImage imageNamed:@""];
    }
    //
    [self.navigationBar setBackgroundImage:image forBarPosition:UIBarPositionTop barMetrics:UIBarMetricsDefault];
    [self.navigationBar setShadowImage:[UIImage new]];//去掉导航栏下面的横线
//    [self.navigationBar dropShadowWithOffset:CGSizeMake(0, 0.5) radius:2 color:[UIColor grayColor] opacity:0.3];
}

- (UIImage *)createImageWithColor:(UIColor*) color {
    CGRect rect = CGRectMake(0.0f, 0.0f, 1.0f, 1.0f);
    UIGraphicsBeginImageContext(rect.size);
    CGContextRef context = UIGraphicsGetCurrentContext();
    CGContextSetFillColorWithColor(context, [color CGColor]);
    CGContextFillRect(context, rect);
    UIImage *theImage = UIGraphicsGetImageFromCurrentImageContext();
    UIGraphicsEndImageContext();
    return theImage;
}
@end
