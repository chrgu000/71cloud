//
//  UIActionSheet+XBlock.h
//  旅行真人译
//
//  Created by xiongyw on 14/11/27.
//  Copyright (c) 2014年 CC. All rights reserved.
//

#import <UIKit/UIKit.h>

typedef void(^completeBlock) (NSInteger buttonIndex);

@interface UIActionSheet (XBlock) <UIActionSheetDelegate>

- (void)showActionSheetViewWithCompleteBlock:(completeBlock) block;

@end
