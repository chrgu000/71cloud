//
//  UserLogin.m
//  NewChain
//
//  Created by macmini on 17/9/21.
//  Copyright © 2017年 lixin. All rights reserved.
//

#import "UserLogin.h"

@implementation UserLogin
- (instancetype)init{

    if (self=[super init]) {

        [UserLogin mj_setupReplacedKeyFromPropertyName:^NSDictionary *{
            return @{
                    @"Userid" :@"uid"
                     };
        }];

    }
    return self;
}
@end
