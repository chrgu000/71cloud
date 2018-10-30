//
//  PartyBannerCollectionViewCell.h
//  TheParty
//
//  Created by macmini on 2018/8/1.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface PartyBannerCollectionViewCell : UICollectionViewCell
@property (weak, nonatomic) IBOutlet UIImageView *imageV;
@property (weak, nonatomic) IBOutlet UILabel *titleL;
@property (weak, nonatomic) IBOutlet UILabel *classL;
@property (weak, nonatomic) IBOutlet UILabel *deline;
@property (weak, nonatomic) IBOutlet UILabel *redView;
@property (weak, nonatomic) IBOutlet UILabel *backView;

@end
