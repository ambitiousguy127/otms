<?php namespace ten31\Otms\Models;

class LeadsExport extends \Backend\Models\ExportModel {
    public function exportData($columns, $sessionKey = null) {
        $entries = Lead::all();
        $entries->each(function($subscriber) use ($columns) {
            $subscriber->addVisible($columns);
        });
        return $entries->toArray();
    }
}