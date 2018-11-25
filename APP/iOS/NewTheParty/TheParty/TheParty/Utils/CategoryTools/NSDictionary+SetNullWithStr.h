//
//  NSDictionary+SetNullWithStr.h
//  模块化
//
//  Created by macmini on 2017/11/28.
//  Copyright © 2017年 lixin. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface NSDictionary_SetNullWithStr : NSDictionary

/*
 *把服务器返回的<null> 替换为“”
 *json表示获取到的带有NULL对象的json数据
 *NSDictionary *newDict = [NSDictionary changeType:json];
 */
+(id)changeType:(id)myObj;

@end
