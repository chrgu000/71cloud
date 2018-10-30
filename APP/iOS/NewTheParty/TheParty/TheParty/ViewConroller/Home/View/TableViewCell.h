//
//  TableViewCell.h
//  TheParty
//
//  Created by macmini on 2018/8/17.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface TableViewCell : UITableViewCell
@property (weak, nonatomic) IBOutlet UIImageView *UserImageV;
@property (weak, nonatomic) IBOutlet UILabel *titleL;
@property (weak, nonatomic) IBOutlet UILabel *SubjectL;

@end
