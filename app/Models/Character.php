<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Character
 */
class Character extends Model
{
    protected $table = 'characters';

    protected $primaryKey = 'obj_Id';

	public $timestamps = false;

    protected $fillable = [
        'account_name',
        'char_name',
        'level',
        'maxHp',
        'curHp',
        'maxCp',
        'curCp',
        'maxMp',
        'curMp',
        'acc',
        'crit',
        'evasion',
        'mAtk',
        'mDef',
        'mSpd',
        'pAtk',
        'pDef',
        'pSpd',
        'runSpd',
        'walkSpd',
        'str',
        'con',
        'dex',
        '_int',
        'men',
        'wit',
        'face',
        'hairStyle',
        'hairColor',
        'sex',
        'heading',
        'x',
        'y',
        'z',
        'movement_multiplier',
        'attack_speed_multiplier',
        'colRad',
        'colHeight',
        'exp',
        'expBeforeDeath',
        'sp',
        'karma',
        'pvpkills',
        'pkkills',
        'clanid',
        'maxload',
        'race',
        'classid',
        'base_class',
        'deletetime',
        'cancraft',
        'title',
        'rec_have',
        'rec_left',
        'accesslevel',
        'online',
        'onlinetime',
        'char_slot',
        'newbie',
        'lastAccess',
        'clan_privs',
        'wantspeace',
        'isin7sdungeon',
        'punish_level',
        'punish_timer',
        'power_grade',
        'nobless',
        'subpledge',
        'last_recom_date',
        'lvl_joined_academy',
        'apprentice',
        'sponsor',
        'varka_ketra_ally',
        'clan_join_expiry_time',
        'clan_create_expiry_time',
        'death_penalty_level',
        'pc_point',
        'name_color',
        'title_color',
        'first_log',
        'aio',
        'aio_end',
        'lastVoteHopzone',
        'lastVoteTopzone',
        'hasVotedHop',
        'hasVotedTop',
        'monthVotes',
        'totalVotes',
        'tries'
    ];

    protected $guarded = [];

        
}