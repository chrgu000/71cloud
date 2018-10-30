//
//  XDX_DetailModel.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/24.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "XDX_DetailModel.h"

@implementation XDX_DetailModel

- (instancetype)init{
    
    if (self=[super init]) {
        
        [XDX_DetailModel mj_setupReplacedKeyFromPropertyName:^NSDictionary *{
            return @{
                     @"moveID" :@"id"
                     };
        }];
        
    }
    return self;
}



@end
