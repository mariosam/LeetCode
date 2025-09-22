/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumTeachings } from './MinimumNumberOfPeopleToTeach.js'

TEST('Starting MinimumNumberOfPeopleToTeach test...', (t) => {
    //Test 1
    let want = 1
    let got = minimumTeachings( 2, [[1],[2],[1,2]], [[1,2],[1,3],[2,3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = minimumTeachings( 3, [[2],[1,3],[1,2],[3]], [[1,4],[1,2],[3,4],[2,3]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
