//
//  RedHearTableViewCell.h
//  TheParty
//
//  Created by fuz-bmac on 2018/11/1.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface RedHearTableViewCell : UITableViewCell
@property (weak, nonatomic) IBOutlet UIImageView *imageV;
@property (weak, nonatomic) IBOutlet UILabel *nameL;
@property (weak, nonatomic) IBOutlet UILabel *timeL;
@property (weak, nonatomic) IBOutlet UILabel *companyL;
@property (weak, nonatomic) IBOutlet UILabel *talkL;

@end