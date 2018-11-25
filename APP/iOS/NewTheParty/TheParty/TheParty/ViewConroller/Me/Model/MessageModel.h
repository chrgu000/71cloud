//
//  MessageModel.h
//  TheParty
//
//  Created by macmini on 2018/8/17.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface MessageModel : NSObject

@property(nonatomic ,strong) NSString *type;
@property(nonatomic ,strong) NSString *message;
@property(nonatomic ,strong) NSString *ctime;
@property(nonatomic ,strong) NSString *is_see;
@property(nonatomic ,assign) BOOL Is;
@property(nonatomic ,strong) NSString *ID;

@end
