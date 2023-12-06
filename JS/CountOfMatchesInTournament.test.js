/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numberOfMatches } from './CountOfMatchesInTournament.js'

TEST('Starting CountOfMatchesInTournament test...', (t) => {
    //Test 1
    let want = 6
    let got = numberOfMatches( 7 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 13
    got = numberOfMatches( 14 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
