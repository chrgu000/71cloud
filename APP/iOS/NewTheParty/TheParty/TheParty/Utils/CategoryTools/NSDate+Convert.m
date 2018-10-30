//
//  NSDate+Convert.m
//
//  Created by Kyo on 5/15/14.
//  Copyright (c) 2014 Kyo. All rights reserved.
//

#import "NSDate+Convert.h"

@implementation NSDate (Convert)

//把日期转为字符串格式  2014-11-20
- (NSString *)strDate
{
    static dispatch_once_t onceToken;
    static  NSDateFormatter *dateFormatter = nil;
    dispatch_once(&onceToken, ^{
        dateFormatter = [[NSDateFormatter alloc] init];
        [dateFormatter setDateFormat:@"yyyy-MM-dd"];
    });
    NSString *destDateString = [dateFormatter stringFromDate:self];
    return destDateString;
}

//把日期转为字符串格式  2014.11.20
- (NSString *)strDatePoint
{
    static dispatch_once_t onceToken;
    static  NSDateFormatter *dateFormatter = nil;
    dispatch_once(&onceToken, ^{
        dateFormatter = [[NSDateFormatter alloc] init];
        [dateFormatter setDateFormat:@"yyyy.MM.dd"];
    });
    NSString *destDateString = [dateFormatter stringFromDate:self];
    return destDateString;
}

//把日期转为字符串格式    yyyy年MM月dd日
- (NSString *)strChineseDate {
    static dispatch_once_t onceToken;
    static  NSDateFormatter *dateFormatter = nil;
    dispatch_once(&onceToken, ^{
        dateFormatter = [[NSDateFormatter alloc] init];
        [dateFormatter setDateFormat:@"yyyy年MM月dd日"];
    });
    NSString *destDateString = [dateFormatter stringFromDate:self];
    return destDateString;
}

//把日期转为字符串格式    yyyy年M月d日
- (NSString *)strChineseDateWithoutFillZero {
    static dispatch_once_t onceToken;
    static  NSDateFormatter *dateFormatter = nil;
    dispatch_once(&onceToken, ^{
        dateFormatter = [[NSDateFormatter alloc] init];
        [dateFormatter setDateFormat:@"yyyy年M月d日"];
    });

    NSString *destDateString = [dateFormatter stringFromDate:self];
    return destDateString;
}

//把日期转为字符串格式    yyyy-MM-dd HH:mm:ss
- (NSString *)strLongDate {
    static dispatch_once_t onceToken;
    static  NSDateFormatter *dateFormatter = nil;
    dispatch_once(&onceToken, ^{
        dateFormatter = [[NSDateFormatter alloc] init];
        [dateFormatter setDateFormat:@"yyyy-MM-dd HH:mm:ss"];
    });
    NSString *destDateString = [dateFormatter stringFromDate:self];
    return destDateString;
}


- (NSString *)strLongLongDate{
    static dispatch_once_t onceToken;
    static  NSDateFormatter *dateFormatter = nil;
    dispatch_once(&onceToken, ^{
        dateFormatter = [[NSDateFormatter alloc] init];
        [dateFormatter setDateFormat:KtimeFormat_yyyy_MM_ddTHH_mm_ss_SSS];
    });
    NSString *destDateString = [dateFormatter stringFromDate:self];
    return destDateString;
}

//根据传入格式返回日期字符串
- (NSString *)strDateWithFormat:(NSString *)format {
    NSDateFormatter *dateFormatter = [[NSDateFormatter alloc] init];
    [dateFormatter setDateFormat:format];
    NSString *destDateString = [dateFormatter stringFromDate:self];
    return destDateString;
}

//根据传入的n天返回一个距离当前n天的NSDate
- (NSDate *)currentIntervalDateWithDay:(NSInteger)intervalDay
{
//    NSDate *currentDate = [NSDate date];
    NSInteger interval = intervalDay * 60 * 60 * 24;
    return [self dateByAddingTimeInterval:interval];
}

//字符串日期转为nsdate，输入的日期字符串形如：@"1992-05-21 13:08"
+ (NSDate *)dateFromString:(NSString *)dateString
{
    static dispatch_once_t onceToken;
    static NSDateFormatter *dateFormatter;
    dispatch_once(&onceToken, ^{
        dateFormatter = [[NSDateFormatter alloc] init];
        dateFormatter.locale = [[NSLocale alloc] initWithLocaleIdentifier:@"zh_CN"];
        dateFormatter.timeZone = [NSTimeZone timeZoneWithAbbreviation:@"GMT+0800"];
        [dateFormatter setDateFormat: @"yyyy-MM-dd HH:mm"];
    });
    
    NSDate *destDate= [dateFormatter dateFromString:dateString];
    return destDate;
}

//字符串日期转为nsdate，输入的日期字符串形如：@"1992-05-21 13:08:00"
+ (NSDate *)dateFromStringWithTime:(NSString *)dateString
{
    static dispatch_once_t onceToken;
    static NSDateFormatter *dateFormatter;
    dispatch_once(&onceToken, ^{
        dateFormatter = [[NSDateFormatter alloc] init];
        dateFormatter.locale = [[NSLocale alloc] initWithLocaleIdentifier:@"zh_CN"];
        dateFormatter.timeZone = [NSTimeZone timeZoneWithAbbreviation:@"GMT+0800"];
        [dateFormatter setDateFormat: @"yyyy-MM-dd HH:mm:ss"];
    });
    NSDate *destDate = [dateFormatter dateFromString:dateString];
    return destDate;
}

//字符串日期转为nsdate，输入的日期字符串形如：@"1992年05月21日"
+ (NSDate *)dateFromStringCH:(NSString *)dateString
{
    static dispatch_once_t onceToken;
    static NSDateFormatter *dateFormatter;
    dispatch_once(&onceToken, ^{
        dateFormatter = [[NSDateFormatter alloc] init];
        dateFormatter.locale = [[NSLocale alloc] initWithLocaleIdentifier:@"zh_CN"];
        dateFormatter.timeZone = [NSTimeZone timeZoneWithAbbreviation:@"GMT+0800"];
        [dateFormatter setDateFormat: @"yyyy年MM月dd日"];
    });
    
    NSDate *destDate= [dateFormatter dateFromString:dateString];
    return destDate;
}

//字符串日期转为nsdate，输入的日期字符串形如：@"1992-05-21"
+ (NSDate *)dateFromStringWithoutTime:(NSString *)dateString
{
    static dispatch_once_t onceToken;
    static NSDateFormatter *dateFormatter;
    dispatch_once(&onceToken, ^{
        dateFormatter = [[NSDateFormatter alloc] init];
        dateFormatter.locale = [[NSLocale alloc] initWithLocaleIdentifier:@"zh_CN"];
        dateFormatter.timeZone = [NSTimeZone timeZoneWithAbbreviation:@"GMT+0800"];
        [dateFormatter setDateFormat: @"yyyy-MM-dd"];
    });
    
    NSDate *destDate= [dateFormatter dateFromString:dateString];
    return destDate;
}

//判断传入的两个nadate是否处于同一天
+ (BOOL)isTheSameDayWithDay1:(NSDate *)day1 day2:(NSDate *)day2
{
    double timezoneFix = [NSTimeZone localTimeZone].secondsFromGMT;
    if (
        (int)(([day1 timeIntervalSince1970] + timezoneFix)/(24*3600)) -
        (int)(([day2 timeIntervalSince1970] + timezoneFix)/(24*3600))
        == 0)
    {
        return YES;
    }
    return NO;
}

+ (NSTimeInterval)dateConvertSecond_yyyy_MM_dd_HH_mm_ss:(NSString *)datetime{
    NSDateFormatter *dateFormatter = [[NSDateFormatter alloc] init];
    [dateFormatter setDateFormat:kDateFormat_yyyy_MM_dd_HH_mm_ss];
    NSDate *tmpDate = [dateFormatter dateFromString:datetime];
    return [tmpDate timeIntervalSince1970];
}

/**
 根据时间戳字符串返回相应的yyyy-MM-dd HH:mm
 
 @param timeString 时间戳
 @return 转换后的字符串
 */
+ (NSString *)timeWithTimeIntervalString:(NSString *)timeString
{
    // 格式化时间
    NSDateFormatter* formatter = [[NSDateFormatter alloc] init];
    formatter.timeZone = [NSTimeZone timeZoneWithName:@"shanghai"];
    [formatter setDateStyle:NSDateFormatterMediumStyle];
    [formatter setTimeStyle:NSDateFormatterShortStyle];
    [formatter setDateFormat:@"yyyy-MM-dd HH:mm"];
    
    // 毫秒值转化为秒
    NSDate* date = [NSDate dateWithTimeIntervalSince1970:[timeString doubleValue]/ 1000.0];
    NSString* dateString = [formatter stringFromDate:date];
    return dateString;
}

+ (NSString *)countDown:(NSInteger)timestamp orderstatus:(NSInteger)orderstatus{
    if(orderstatus==0){
        NSInteger minute=timestamp/60;
        NSInteger second=timestamp-minute*60;
        return [NSString stringWithFormat:@"%ld分%ld秒",(long)minute,(long)second];
    }
    else if(orderstatus==6){
        NSInteger days=timestamp/(24*3600);
        NSInteger hours=(timestamp-days*24*3600)/3600;
        NSInteger minute=(timestamp-days*24*3600-hours*3600)/60;
        if(days>0){
            return [NSString stringWithFormat:@"%ld天%ld时",(long)days,(long)hours];
        }
        else{
            return [NSString stringWithFormat:@"%ld时%ld分",(long)hours,(long)minute];
        }
    }
    return nil;
}

@end
