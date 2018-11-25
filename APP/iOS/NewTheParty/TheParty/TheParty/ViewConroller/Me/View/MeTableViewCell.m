//
//  MeTableViewCell.m
//  TheParty
//
//  Created by macmini on 2018/8/6.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "MeTableViewCell.h"

@implementation MeTableViewCell

- (void)awakeFromNib {
    [super awakeFromNib];
    // Initialization code
    self.cleanL.layer.masksToBounds = YES;
    self.cleanL.layer.cornerRadius = 8.5;
}

- (void)setSelected:(BOOL)selected animated:(BOOL)animated {
    [super setSelected:selected animated:animated];

    // Configure the view for the selected state
}

@end
