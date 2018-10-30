//
//  ThePartySingTon.m
//  TheParty
//
//  Created by macmini on 2018/8/13.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ThePartySingTon.h"

@implementation ThePartySingTon
static ThePartySingTon *instance = nil;
+ (instancetype)SharedInstance{
    {
        static ThePartySingTon *instance = nil;
        static dispatch_once_t onceToken;
        
        dispatch_once(&onceToken, ^{
            instance = [[ThePartySingTon alloc] init];
            
            NSString *identifier = [[[UIDevice currentDevice] identifierForVendor] UUIDString];
            instance.app_id = [NSString stringWithFormat:@"%@",identifier];
        });
        return instance;
    }
}

@end
