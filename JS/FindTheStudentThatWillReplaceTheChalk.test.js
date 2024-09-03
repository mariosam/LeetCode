/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { chalkReplacer } from './FindTheStudentThatWillReplaceTheChalk.js'

TEST('Starting FindTheStudentThatWillReplaceTheChalk test...', (t) => {
    //Test 1
    let want = 0
    let got = chalkReplacer( [5,1,5], 22 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = chalkReplacer( [3,4,1,2], 25 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
