//
//  Macro.h
//  CHTC_EN
//
//  Created by macmini on 2018/5/12.
//  Copyright © 2018年 lixin. All rights reserved.
//

#ifndef Macro_h
#define Macro_h

#define H_ScreenFrame           [[UIScreen mainScreen] bounds]
#define H_ScreenFrame_64 CGRectMake(0, 64, CGRectGetWidth(H_ScreenFrame), CGRectGetHeight(H_ScreenFrame)-64)

#define SCREEN_W       H_ScreenFrame.size.width
#define SCREEN_H       H_ScreenFrame.size.height

#define GIVE_W(x) (x)*[UIScreen mainScreen].bounds.size.width/375.0
#define GIVE_H(x) (x)*[UIScreen mainScreen].bounds.size.height/667.0
#define Height(x) (kIs_iPhoneX ? (x) : (x)*[UIScreen mainScreen].bounds.size.height/667.0)


#define IOS_VERSION             [[[UIDevice currentDevice] systemVersion] floatValue]
#define CFBundleVersion [[NSUserDefaults standardUserDefaults] objectForKey:@"CFBundleVersion"];
#define CFBundleShortVersionString [[NSUserDefaults standardUserDefaults] objectForKey:@"CFBundleShortVersionString"];

//系统版本
#define kSystemVersion ([[[UIDevice currentDevice] systemVersion] doubleValue])
#define kSystemVersionMoreThan5 (kSystemVersion >= 5.0)
#define kSystemVersionMoreThan6 (kSystemVersion >= 6.0)
#define kSystemVersionMoreThan7 (kSystemVersion >= 7.0)
#define kSystemVersionMoreThan8 (kSystemVersion >= 8.0)
#define kSystemVersionMoreThan9 (kSystemVersion >= 9.0)
#define kSystemVersionMoreThan10 (kSystemVersion >= 10.0)
#define kSystemVersionMoreThan11 (kSystemVersion >= 11.0)
#define kSystemVersionMoreThan(_version) (kSystemVersion >= _version)  //版本号是否大于等于传入版本号
#define kDevice_Is_iPhoneX ([UIScreen instancesRespondToSelector:@selector(currentMode)] ? CGSizeEqualToSize(CGSizeMake(1125, 2436), [[UIScreen mainScreen] currentMode].size) : NO)

#define tabbarH (kDevice_Is_iPhoneX ? 98 : 40)

#define IsScreenHeight_960 (IOS_VERSION >= 8.0 ? [UIScreen mainScreen].nativeBounds.size.height == 960 : [UIScreen mainScreen].currentMode.size.height == 960)
#define IsScreenHeight_1136 (IOS_VERSION >= 8.0 ? [UIScreen mainScreen].nativeBounds.size.height == 1136 : [UIScreen mainScreen].currentMode.size.height == 1136)
#define IsScreenHeight_1334 (IOS_VERSION >= 8.0 ? [UIScreen mainScreen].nativeBounds.size.height == 1334 : [UIScreen mainScreen].currentMode.size.height == 1334)
#define IsScreenHeight_2208 (IOS_VERSION >= 8.0 ? [UIScreen mainScreen].nativeBounds.size.height == 1920 : [UIScreen mainScreen].currentMode.size.height == 2208)
#define kStatusBarAndNavigationBarHeight (kIs_iPhoneX ? 88.f : 64.f)
#define kIs_iPhoneX ([UIScreen instancesRespondToSelector:@selector(currentMode)] ? CGSizeEqualToSize(CGSizeMake(1125, 2436), [[UIScreen mainScreen] currentMode].size) : NO)
typedef void(^refreshTableView)(void);

//校验字符串是否为null
#define checkStringNull(value)              ((value == nil || [value isKindOfClass:[NSNull class]]) ? @"" : value)
#define checkNumberNull(value)              ((value == nil || value == NULL) ? 0 : value)

//格式化
#define formatString(...)                   [NSString stringWithFormat: __VA_ARGS__]

#define SELFAPPDELEGATE                     ((AppDelegate*)[UIApplication sharedApplication].delegate)

//定义视图背景
#define CYBackgroundColor                   UIColorFromRGBA(0xf5f5f5, 1)

//定义颜色
#define COLOR(r,g,b)                        [UIColor colorWithRed:r/255.0 green:g/255.0 blue:b/255.0 alpha:1]
#define COLORA(r,g,b,a)                     [UIColor colorWithRed:r/255.0 green:g/255.0 blue:b/255.0 alpha:a]
#define UIColorFromRGBA(rgbV, alphaV)       [UIColor colorWithRed:((float)((rgbV & 0xFF0000) >> 16))/255.0 green:((float)((rgbV & 0x00FF00) >> 8))/255.0 blue:((float)(rgbV & 0x0000FF))/255.0 alpha:alphaV]
//字体处理
#define SizeScale ((kWindowHeight > 568) ? kWindowHeight/568 : 1)
// 根据屏幕的分辨率 设置字体的大小 默认 1.0 6 1.1 6p 1.3
#define FontScale(F) [UIFont systemFontOfSize:(F)*SizeScale]
#define Font(F) [UIFont systemFontOfSize:(F)]
#define FontBold(F) [UIFont boldSystemFontOfSize:(F)];

#define WEAKSELF                            typeof(self) __weak weakSelf = self;
/// 懒加载 ///
#define ELazyMutableArray(_array) \
return !(_array) ? (_array) = [NSMutableArray array] : (_array);
//控制模式输出
#ifndef __OPTIMIZE__
#define NSLog(...) NSLog(__VA_ARGS__)
#else
#define NSLog(...){}
#endif

//通用查询数量
#define H_PageSize      @"10"

//验证码时效
#define countnum        60

//默认cell的高度

#define H_TabBarHeight  49

#define X_OpenThumb                         YES
#define X_ThumbnailImage(url)               X_OpenThumb ?[url stringByAppendingString:@"!thumb120"]:url
#define X_ThumbnailImage_240(url)           X_OpenThumb ?[url stringByAppendingString:@"!thumb240"]:url

#define X_Present_DelayTime                 IOS_VERSION < 8.0 ? .7f : .3f

#define X_GetMoney(str)                     formatString(@"￥%zd",[str integerValue])
#define X_GetMoney_NoSign(str)              formatString(@"%zd",[str integerValue])

#define X_GetIntegerValue(str)              formatString(@"%zd",[str integerValue])

#define X_ShareUrl                          @""
#endif /* Macro_h */
