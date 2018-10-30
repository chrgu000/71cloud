//
//  RankmanTableViewCell.m
//  TheParty
//
//  Created by macmini on 2018/8/18.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "RankmanTableViewCell.h"

@implementation RankmanTableViewCell

- (void)awakeFromNib {
    [super awakeFromNib];
    // Initialization code
    self.UserImageV.layer.masksToBounds = YES;
    self.UserImageV.layer.cornerRadius = 21.5;
    
}

- (void)setSelected:(BOOL)selected animated:(BOOL)animated {
    [super setSelected:selected animated:animated];

    // Configure the view for the selected state
}

@end
