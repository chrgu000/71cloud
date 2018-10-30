//
//  UIActionSheet+XBlock.m
//  旅行真人译
//
//  Created by xiongyw on 14/11/27.
//  Copyright (c) 2014年 CC. All rights reserved.
//

#import "UIActionSheet+XBlock.h"

#import <objc/runtime.h>

@implementation UIActionSheet (XBlock)

static char key;

- (void)showActionSheetViewWithCompleteBlock:(completeBlock)block
{
    if (block) {
        objc_removeAssociatedObjects(self);
        objc_setAssociatedObject(self, &key, block, OBJC_ASSOCIATION_COPY);
        self.delegate = self;
    }
}

- (void)actionSheet:(UIActionSheet *)actionSheet clickedButtonAtIndex:(NSInteger)buttonIndex {
    completeBlock block = objc_getAssociatedObject(self, &key);
    if (block) {
        block(buttonIndex);
    }
    //block = nil;
}

@end
