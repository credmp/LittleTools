select t.id, t.tn, t.title, df.label, dfv.value_text
  from ticket t
 inner join queue q on q.id = t.queue_id
 inner join dynamic_field df on df.name='Prioriteit'
 inner join dynamic_field_value dfv on dfv.field_id = df.id 
                                   and dfv.object_id=t.id
 where q.name='Raw'

select q.id, q.name
  from queue q

