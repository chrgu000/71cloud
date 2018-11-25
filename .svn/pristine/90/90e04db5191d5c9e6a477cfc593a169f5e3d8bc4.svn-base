//
//  UIHelper.h
//  XiaoJiRunning
//
//  Created by Wen on 2016/11/29.
//  Copyright © 2016年 Wen. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface UIHelper : NSObject

+(instancetype)sharedSingleton;

-(void)pushVCWithXib:(NSString *)className vc:(UIViewController *)vc parames:(NSDictionary *)parames;
-(void)pushVC:(NSString *)className vc:(UIViewController *)vc parames:(NSDictionary *)parames;
-(void)presentWithXib:(NSString *)className vc:(UIViewController *)vc parames:(NSDictionary *)parames;
-(void)presentVC:(NSString *)className vc:(UIViewController *)vc parames:(NSDictionary *)parames;

-(UIAlertController *)showAlertView:(UIViewController *)viewController title:(NSString *)title message:(NSString *)message firstBtn:(NSString *)okButtonTitle secondBtn:(NSString *)cancelButtonTitle confirm:(void (^)(void))confirm cancel:(void (^)(void))cancel;
@end
