//
//  NSDictionary+SetNullWithStr.m
//  模块化
//
//  Created by macmini on 2017/11/28.
//  Copyright © 2017年 lixin. All rights reserved.
//

#import "NSDictionary+SetNullWithStr.h"

@implementation NSDictionary_SetNullWithStr
//将NSDictionary中的Null类型的项目转化成@""
+ (NSDictionary *)nullDic:(NSDictionary *)mydic{
    
    NSArray *keyArr = [mydic allKeys];
    
    NSMutableDictionary *resDic = [[NSMutableDictionary alloc] init];
    
    for (int i = 0; i < keyArr.count; i++) {
        id obj = [mydic objectForKey:keyArr[i]];
        
        obj = [self changeType:obj];
        
        [resDic setObject:obj forKey:keyArr[i]];
    }
    return  resDic;
    
}




//将NSArray中的Null类型的项目转化成@""
+ (NSArray *)nullArr:(NSArray *)myArr{
    NSMutableArray *resArr = [[NSMutableArray alloc] init];
    for (int i = 0; i < myArr.count; i++) {
        id obj = myArr[i];
        obj = [self changeType:obj];
        [resArr addObject:obj];
    }
    return resArr;
}

//将NSString类型的原路返回
+(NSString *)stringToString:(NSString *)string
{
    return string;
}

//将Null类型的项目转化成@""
+(NSString *)nullToString
{
    return @"";
}

//主要方法
//类型识别:将所有的NSNull类型转化成@""
+(id)changeType:(id)myObj
{
    if ([myObj isKindOfClass:[NSDictionary class]])
    {
        return [self nullDic:myObj];
    }
    else if([myObj isKindOfClass:[NSArray class]])
    {
        return [self nullArr:myObj];
    }
    else if([myObj isKindOfClass:[NSString class]])
    {
        return [self stringToString:myObj];
    }
    else if([myObj isKindOfClass:[NSNull class]])
    {
        return [self nullToString];
    }
    else
    {
        return myObj;
    }
}

@end
