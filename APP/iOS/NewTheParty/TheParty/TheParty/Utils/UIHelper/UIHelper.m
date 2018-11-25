//
//  UIHelper.m
//  XiaoJiRunning
//
//  Created by Wen on 2016/11/29.
//  Copyright © 2016年 Wen. All rights reserved.
//

#import "UIHelper.h"
#import <objc/runtime.h>

@implementation UIHelper

static id _instance = nil;
+(instancetype)sharedSingleton{
    static dispatch_once_t onceToken;
    dispatch_once(&onceToken, ^{
        _instance = [[UIHelper alloc] init];
    });
    return _instance;
}

/**
 界面跳转封装

 @param className 类的文件名称
 @param vc 当前vc对象
 @param parames 传递过去的参数
 */
-(void)pushVCWithXib:(NSString *)className vc:(UIViewController *)vc parames:(NSDictionary *)parames
{
    id instance=[self installClassByXib:className parames:parames];
    if(vc.navigationController.viewControllers[0]==vc){
        ((UIViewController *)instance).hidesBottomBarWhenPushed=YES;
    }
    [vc.navigationController pushViewController:instance animated:NO];
}


/**
 界面跳转封装

 @param className 类的文件名称
 @param vc 当前vc对象
 @param parames 传递过去的参数
 */
-(void)pushVC:(NSString *)className vc:(UIViewController *)vc parames:(NSDictionary *)parames
{
    id instance=[self installClass:className parames:parames];
    if(vc.navigationController.viewControllers[0]==vc){
        ((UIViewController *)instance).hidesBottomBarWhenPushed=YES;
    }
    [vc.navigationController pushViewController:instance animated:NO];
}

/**
 模态试图跳转，带xib的
 
 @param className 类的文件名称
 @param vc 当前vc对象
 @param parames 传递过去的参数
 */
-(void)presentWithXib:(NSString *)className vc:(UIViewController *)vc parames:(NSDictionary *)parames{
    id instance=[self installClassByXib:className parames:parames];
    UINavigationController *nav=[[UINavigationController alloc] initWithRootViewController:instance];
    [vc presentViewController:nav animated:YES completion:nil];
}

/**
 模态试图跳转

 @param className 类的文件名称
 @param vc 当前vc对象
 @param parames 传递过去的参数
 */
-(void)presentVC:(NSString *)className vc:(UIViewController *)vc parames:(NSDictionary *)parames{
    id instance=[self installClass:className parames:parames];
    UINavigationController *nav=[[UINavigationController alloc] initWithRootViewController:instance];
    [vc presentViewController:nav animated:YES completion:nil];
}

-(id)installClassByXib:(NSString *)className parames:(NSDictionary *)parames{
    const char *classname = [className cStringUsingEncoding:NSASCIIStringEncoding];
    Class newClass = objc_getClass(classname);
    id instance=[[newClass alloc] initWithNibName:className bundle:nil];
    if(parames&&[parames count]>0){
        [parames enumerateKeysAndObjectsUsingBlock:^(id  _Nonnull key, id  _Nonnull obj, BOOL * _Nonnull stop) {
            //kvc赋值
            [instance setValue:obj forKey:key];
        }];
    }
    return instance;
}

-(id)installClass:(NSString *)className parames:(NSDictionary *)parames{
    const char *classname = [className cStringUsingEncoding:NSASCIIStringEncoding];
    Class newClass = objc_getClass(classname);
    id instance=[[newClass alloc] init];
    if(parames&&[parames count]>0){
        [parames enumerateKeysAndObjectsUsingBlock:^(id  _Nonnull key, id  _Nonnull obj, BOOL * _Nonnull stop) {
            [instance setValue:obj forKey:key];
        }];
    }
    return instance;
}

@end
