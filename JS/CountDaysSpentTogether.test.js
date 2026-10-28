/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countDaysTogether } from './CountDaysSpentTogether.js'

TEST('Starting CountDaysSpentTogether test...', (t) => {
    //Test 1
    let want = 3
    let got = countDaysTogether( "08-15", "08-18", "08-16", "08-19" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countDaysTogether( "10-01", "10-31", "11-01", "12-31" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
