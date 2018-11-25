//
//  MeRootTableViewCell.m
//  TheParty
//
//  Created by macmini on 2018/8/1.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "MeRootTableViewCell.h"

@implementation MeRootTableViewCell

- (void)awakeFromNib {
    [super awakeFromNib];
    // Initialization code
    self.imageV.layer.masksToBounds = YES;
    self.imageV.layer.cornerRadius = 7;
}

- (void)setSelected:(BOOL)selected animated:(BOOL)animated {
    [super setSelected:selected animated:animated];

    // Configure the view for the selected state
}

@end
