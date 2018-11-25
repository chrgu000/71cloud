//
//  PartyBannerCollectionView.h
//  TheParty
//
//  Created by macmini on 2018/8/1.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import <UIKit/UIKit.h>
@protocol PartyBannerCollectionViewDelegate <NSObject>

-(void)PartyBannerSection:(NSInteger)indexSection;


@end

@interface PartyBannerCollectionView : UICollectionView

@property (nonatomic, weak) id<PartyBannerCollectionViewDelegate> Actiondelegate;

@property (nonatomic, assign) NSInteger indexSection;

- (instancetype)initWithFrame:(CGRect)frame withDataAry:(NSArray *)dataAry;

@end
