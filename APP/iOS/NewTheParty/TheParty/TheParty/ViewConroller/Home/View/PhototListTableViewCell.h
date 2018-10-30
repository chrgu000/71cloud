//
//  PhototListTableViewCell.h
//  TheParty
//
//  Created by macmini on 2018/8/2.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface PhototListTableViewCell : UITableViewCell
@property (weak, nonatomic) IBOutlet UILabel *titleL;
@property (weak, nonatomic) IBOutlet UILabel *deline;
@property (weak, nonatomic) IBOutlet UIImageView *imageVleft;
@property (weak, nonatomic) IBOutlet UIImageView *imageVRightT;
@property (weak, nonatomic) IBOutlet UIImageView *imageVRightD;
@property (weak, nonatomic) IBOutlet UILabel *imageVup;
@end
