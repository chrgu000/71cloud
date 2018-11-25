//
//  ActityListTableViewCell.m
//  TheParty
//
//  Created by macmini on 2018/8/3.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ActityListTableViewCell.h"

@implementation ActityListTableViewCell

- (void)awakeFromNib {
    [super awakeFromNib];
    // Initialization code
    self.typeL.layer.masksToBounds = YES;
    self.typeL.layer.cornerRadius  = 5;
}

- (void)setSelected:(BOOL)selected animated:(BOOL)animated {
    [super setSelected:selected animated:animated];

    // Configure the view for the selected state
}

@end
