//
//  FunClubGifHeader.m
//  dynamic
//
//  Created by huanghao on 16/8/23.
//  Copyright © 2016年 huanghao. All rights reserved.
//

#import "FunClubGifHeader.h"

@implementation FunClubGifHeader

- (void)prepare
{
    [super prepare];
    
    self.lastUpdatedTimeLabel.hidden = YES;
    self.stateLabel.hidden = YES;
    
    NSMutableArray *pullArr = [NSMutableArray array];
    for (int i=1; i<44; i++) {
        UIImage *image = [UIImage imageNamed:[NSString stringWithFormat:@"circle_%d",i]];
        [pullArr addObject:image];
    }
    [self setImages:pullArr duration:1.0 forState:MJRefreshStateIdle];
    
    
    NSMutableArray *refreshArr = [NSMutableArray array];
    for (int i=1; i<46; i++) {
        UIImage *image = [UIImage imageNamed:[NSString stringWithFormat:@"F_%d",i]];
        [refreshArr addObject:image];
    }
    [self setImages:refreshArr duration:1.5 forState:MJRefreshStateRefreshing];
    
}

@end
