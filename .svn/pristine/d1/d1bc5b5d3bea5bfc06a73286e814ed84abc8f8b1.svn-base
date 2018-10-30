//
//  UIAlertView+XBlock.m
//  YKCS
//
//  Created by xiongyw on 14-11-7.
//  Copyright (c) 2014年 Transn. All rights reserved.
//

#import "UIAlertView+XBlock.h"

#import <objc/runtime.h>

@implementation UIAlertView (XBlock)

static char key;

- (void)showAlertViewWithCompleteBlock:(completeBlock)block
{
    if (block) {
        objc_removeAssociatedObjects(self);
        objc_setAssociatedObject(self, &key, block, OBJC_ASSOCIATION_COPY);
        self.delegate = self;
    }
    
    [self show];
}

- (void)alertView:(UIAlertView *)alertView clickedButtonAtIndex:(NSInteger)buttonIndex {
    completeBlock block = objc_getAssociatedObject(self, &key);
    if (block) {
        block(buttonIndex);
    }
    //block = nil;
}

@end